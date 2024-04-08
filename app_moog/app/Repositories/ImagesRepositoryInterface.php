<?php

namespace App\Repositories;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

interface  ImagesRepositoryInterface
{
  public function uploadAndCropImage(UploadedFile $image, array $cropPoints = null): string;
  public function deleteImageIfUploaded(Request $request): void;

}