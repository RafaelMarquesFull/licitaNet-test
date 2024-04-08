import React from 'react';

const ImageGallery = ({ mainImage, squareImages }) => {
    return (
        <div className="grid gap-4">
            {/* Main image */}
            <div>
                <img className="h-auto max-w-full rounded-lg" src={mainImage} alt="Main Image" />
            </div>
            {/* Grid of square images */}
            <div className="grid grid-cols-5 gap-4">
                {squareImages.map((image, index) => (
                    <div key={index}>
                        <img className="h-auto max-w-full rounded-lg" src={image} alt={`Square Image ${index + 1}`} />
                    </div>
                ))}
            </div>
        </div>
    );
}

export default ImageGallery;
