<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    private static $sub_categories;
    private static $image;
    private static $imageName;
    private static $imageUrl;
    private static $directory;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'sub-category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }

    public static function getNewSubCategory($request)
    {
        self::$sub_categories = new SubCategory();
        self::$sub_categories->category_id = $request->category_id;
        self::$sub_categories->name = $request->name;
        self::$sub_categories->description = $request->description;
        self::$sub_categories->image = self::getImageUrl($request);
        self::$sub_categories->save();
    }


    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public static function updateSubCategory($request, $id)
    {
        self::$sub_categories = SubCategory::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$sub_categories->image))
            {
                unlink(self::$sub_categories->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$sub_categories->image;

        }

        self::$sub_categories->category_id = $request->category_id;
        self::$sub_categories->name = $request->name;
        self::$sub_categories->description = $request->description;
        self::$sub_categories->image = self::$imageUrl;
        self::$sub_categories->save();

    }

    public static function deleteSubCategory($request, $id)
    {
        self::$sub_categories = SubCategory::find($id);
        if (file_exists('$sub_categories->image'))
        {
            unlink(self::$sub_categories->image);
        }
        self::$sub_categories->delete();
    }


}
