<?php

namespace App\Repositories;

use App\Models\Products;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class ImageUploadStorage implements ImagesRepositoryInterface
{
    const IMAGE_WIDTH = 300;
    const IMAGE_HEIGHT = 400;

    /**
     * @var FilesystemManager
     */
    private $fs;

    /**
     * @var string Storage disk used for keeping photos.
     */
    protected $disk = 'public';

    public function __construct(FilesystemManager $fs)
    {
        $this->fs = $fs->disk($this->disk);
    }

    /**
     * Upload and crop images to predefined width and height.
     *
     * @param UploadedFile $file
     * @param array|null $cropPoints
     * @return string image file name.
     */
    public function uploadAndCropImage(UploadedFile $image, array $cropPoints = null): string
    {
        try {
            return $this->cropAndResizeImage($image, $cropPoints);
        } catch (\Exception $e) {
            logger("Cannot upload and crop image. " . $e->getMessage());
            return null;
        }
    }

    /**
     * Check if user has uploaded image photo.
     *
     * @param Products $product
     * @return bool
     */
    private function userHasUploadedImage(Products $product)
    {
        
        return $product->images && !Str::contains($product->images, ['http', 'gravatar']);
    }

    /**
     * Get destination directory where image should be uploaded.
     *
     * @return string
     */
    private function getDestinationDirectory()
    {
        return '/upload/products';
    }

    /**
     * Delete image if it was uploaded.
     *
     * @param Products $product
     */
    public function deleteImageIfUploaded(Request $request): void
    {
        $product = Products::find($request->id);

        if ($product && $this->userHasUploadedImage($product)) {
            $path = sprintf(
                "%s/%s",
                $this->getDestinationDirectory(),
                $product->images
            );
            
            $this->fs->delete($path);

            $product->images = null;
            $product->save();
        }
    }
    

    /**
     * Crop and resize image.
     *
     * @param UploadedFile $file
     * @param array|null $points
     * @return string
     * @throws \Exception
     */
    private function cropAndResizeImage(UploadedFile $file, array $points = null)
    {
        // Salvar a imagem no diretório "storage/app/public"
        $fileName = $file->store($this->getDestinationDirectory());

        // Retorna o nome do arquivo salvo
        return $fileName;
    }
}
