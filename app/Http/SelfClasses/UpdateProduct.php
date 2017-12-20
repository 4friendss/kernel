<?php
/**
 * Created by PhpStorm.
 * User: Artan
 * Date: 11/29/2017
 * Time: 8:26 AM
 */

namespace App\Http\SelfClasses;

use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductFlag;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\SubUnitCount;
use App\Models\UnitCount;
use Hekmatinasser\Verta\Verta;

class UpdateProduct
{
    public function UpdateProduct($product)
    {
        function updateCategoryProduct($pId, $cateId)
        {
            $productId = CategoryProduct::where('product_id', '=', $pId)->value('id');
            $productCategory = CategoryProduct::find($productId);
            $productCategory->category_id = $cateId;
            $productCategory->save();
        }

        //add a flags with flag's price in product flags
        function updateProductFlag($title, $price, $lastProductId)
        {
            $productId = ProductFlag::where('product_id', '=', $lastProductId)->value('id');
            $prices = ProductFlag::find($productId);
            $prices->title = $title;
            $prices->price = str_replace(',', '', $price);
            $prices->save();
        }

        //upload product's video
        $videoSrc = '';
        if (!empty($product->video_src)) {
            $file = $product->video_src;
            $videoSrc = $file->getClientOriginalName();
            $file->move('public/dashboard/productFiles/video/', $videoSrc);
        }

        $unit_count = UnitCount::where('id', '=', $product->unit_count)->value('title');
        $sub_unit_count = SubUnitCount::where('id', '=', $product->sub_unit_count)->value('title');
        //add a new product in product table
        $pr = Product::find($product->id);
        if (!empty($product->title)) {
            $pr->title = $product->title;
        }
        if (!empty($product->description)) {
            $pr->description = $product->description;
        }
        if (!empty($product->discount)) {
            $pr->discount = $product->discount;
        }
        if (!empty($product->produce_date)) {
            $pr->produce_date = $this->dateConvert($product->produce_date);
        }
        if (!empty($product->expire_date)) {
            $pr->expire_date = $this->dateConvert($product->expire_date);
        }
        if (!empty($product->produce_place)) {
            $pr->produce_place = $product->produce_place;
        }
        if (!empty($unit_count)) {
            $pr->unit_count = $unit_count;
        }
        if (!empty($sub_unit_count)) {
            $pr->sub_unit_count = $sub_unit_count;
        }
        if (!empty($product->ready_time)) {
            $pr->ready_time = $product->ready_time;
        }
        if (!empty($videoSrc)) {
            $pr->video_src = $videoSrc;
        }
        if (!empty($product->ready_time)) {
            $pr->delivery_volume = $product->delivery_volume;
        }
        if (!empty($product->ready_time)) {
            $pr->warehouse_count = $product->warehouse_count;
        }
        if (!empty($product->ready_time)) {
            $pr->warehouse_place = $product->warehouse_place;
        }
        if (!empty($product->ready_time)) {
            $pr->barcode = $product->barcode;
        }
        $pr->save();
        $lastProductId = $pr->id;
        //above line find product_id that now saved for use in pivot table
        // $lastProductId = Product::orderBy('created_at', 'desc')->offset(0)->limit(1)->value('id');
        //this block code save color array of product in color_product table
        $countColor = count($product->color);
        if ($countColor) {
            for ($i = 0; $i < $countColor; $i++) {
                $productColor = new ProductColor();
                $productColor->product_id = $lastProductId;
                $productColor->color_id = $product->color[$i];
                $productColor->active = 1;
                $productColor->save();

            }

        }
        //this block code save size array of product in product_size table
        $countSize = count($product->size);
        if ($countSize) {
            for ($i = 0; $i < $countSize; $i++) {
                $productColor = new ProductSize();
                $productColor->product_id = $lastProductId;
                $productColor->size_id = $product->size[$i];
                $productColor->active = 1;
                $productColor->save();

            }

        }
        //this block code save and upload picture array of product in product_Images table
        $countPic = count($product->file);
        if ($countPic) {
            for ($i = 0; $i < $countPic; $i++) {
                $productPicture = new ProductImage();
                $productPicture->product_id = $lastProductId;
                $imageName = $product->file[$i]->getClientOriginalName();
                $productPicture->image_src = $imageName;
                $product->file[$i]->move('public/dashboard/productFiles/picture/', $imageName);
                $productPicture->active = 1;
                $productPicture->save();

            }

        }
        /**this block code save flags and prices of product in product_flags table
         * by calling updateProductFlag(title of flag, price of flag, product_id) **/
        if (!empty($product->price)) {
            updateProductFlag('price', $product->price, $lastProductId);
        }
        if (!empty($product->special_price)) {
            updateProductFlag('special_price', $product->special_price, $lastProductId);
        }
        if (!empty($product->wholesale_price)) {
            updateProductFlag('wholesale_price', $product->wholesale_price, $lastProductId);
        }
        if (!empty($product->sales_price)) {
            updateProductFlag('sales_price', $product->sales_price, $lastProductId);
        }
        if (!empty($product->free_price)) {
            updateProductFlag('free_price', $product->free_price, $lastProductId);
        }
        /**this section check user select which level of categories
         *and insert row to category_product table with latest product_id and category_id
         **/
        //update category_id if it was changed in edit form
        if (!empty($product->lastCategory)) {
            $catId = $product->lastCategory;
            //find category_id with 'سایر' title
            $depth = Category::where([['parent_id', $catId], ['active', 1]])->value('depth');
            if ($depth != 0) {
                $subCatId = Category::where([['parent_id', $catId], ['active', 1]])->
                where('title', '=', 'سایر')->value('id');
            } else {
                $subCatId = $catId;
            }
            updateCategoryProduct($lastProductId, $subCatId);

        }
        return (true);
    }

//below function is related to convert jalali date to Miladi date
function dateConvert($jalaliDate)
{
    if (count($jalaliDate) > 0) {
        if ($date = explode('/', $jalaliDate)) {
            $year = $date[0];
            $month = $date[1];
            $day = $date[2];
        }
        $gDate = $this->jalaliToGregorian($year, $month, $day);
        $gDate = $gDate[0] . '-' . $gDate[1] . '-' . $gDate[2];
        return $gDate;
    }
    return;
}

public
function jalaliToGregorian($year, $month, $day)
{
    return Verta::getGregorian($year, $month, $day);
}
}