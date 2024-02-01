<?php

namespace App\Jobs;

use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $w;
    private $h;
    private $fileName;
    private $path;

    public function __construct($filePath, $w, $h) {

    $this->path = dirname($filePath);
    $this->fileName = basename($filePath);
    $this->w = $w;
    $this->h = $h;
    }

    public function handle() {

    $w = $this->w;
    $h = $this->h;

    $srcPath = storage_path() . '/app/public/' . $this->path . '/' . $this->fileName;
    $destPath = storage_path() . '/app/public/' . $this->path . "/crop{$w}x{$h}_" . $this->fileName;

    $croppedImage = Image::load($srcPath)
        ->crop(Manipulations::CROP_CENTER , $w, $h)
        ->watermark(storage_path('app/public/image-logo/03.png' ))
        ->watermarkPosition(Manipulations::POSITION_CENTER)
        // ->watermarkPadding(10, 10, Manipulations::UNIT_PERCENT) // 10% padding around the watermark
        ->watermarkOpacity (35)
        ->save($destPath);
    }

}

