<?php

namespace Elbow\Http\Controllers;

use Illuminate\Http\Request;
use Elbow\Image as ImageModel;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ImagesController extends Controller
{
    public $options = ['visibility' => 'public', 'Cache-Control' => 'max-age=315360000'];

    public function wysiwyg(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'
        ]);

        $large = $this->large($request->image);

        return response()->json([
            'large' => $large,
            'success' => true,
        ]);
    }

    public function header(Request $request)
    {
        $request->validate([
            'header_photo' => 'required|image|mimes:jpeg,jpg,gif,bmp,png,svg'
        ]);

        $large = $this->large($request->file('header_photo'));
        $thumbnail = $this->thumbnail($request->file('header_photo'));
        $stamp = $this->stamp($request->file('header_photo'));

        $record = ImageModel::create([
            'thumbnail' => $thumbnail,
            'stamp' => $stamp,
            'large' => $large
        ]);
        return response()->json([
            'image_id' => $record->id,
            'thumbnail' => $thumbnail,
            'stamp' => $stamp,
            'large' => $large,
            'success' => true,
        ]);
    }

    public function large($image)
    {
        $resize = Image::make($image)
            ->resize(1280, 1280, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 70)->stream();
        $hash = md5($resize->__toString());

        if (config('app.env') == 'production') {
            Storage::disk('s3')->put('/images/'.$hash.'.jpg' , $resize->__toString(), $this->options);
            $location =  Storage::disk('s3')->url('images/'.$hash.'.jpg');
        } else {
            Storage::disk('local')->put('/public/images/'.$hash.'.jpg' , $resize->__toString());
            $location =  Storage::disk('local')->url('images/'.$hash.'.jpg');
        }
        return $location;
    }

    public function thumbnail($img)
    {
        $resize = Image::make($img)
            ->resize(575, 575, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 75)->stream();
        $hash = md5($resize->__toString());
        if (config('app.env') == 'production') {
            Storage::disk('s3')->put('/images/'.$hash.'.jpg' , $resize->__toString(), $this->options);
            $location =  Storage::disk('s3')->url('images/'.$hash.'.jpg');
        } else {
            Storage::disk('local')->put('/public/images/'.$hash.'.jpg' , $resize->__toString());
            $location =  Storage::disk('local')->url('images/'.$hash.'.jpg');
        }
        return $location;
    }

    public function stamp($img)
    {
        $resize = Image::make($img)
            ->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode('jpg', 80);
        $hash = md5($resize->__toString());
        if (config('app.env') == 'production') {
            Storage::disk('s3')->put('/images/'.$hash.'.jpg' , $resize->__toString(), $this->options);
            $location =  Storage::disk('s3')->url('images/'.$hash.'.jpg');
        } else {
            Storage::disk('local')->put('/public/images/'.$hash.'.jpg' , $resize->__toString());
            $location =  Storage::disk('local')->url('images/'.$hash.'.jpg');
        }
        return $location;
    }
}
