<?php
/**
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose">
 *   Copyright (c) 2018 Aspose.Slides for Cloud
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */


namespace Aspose\Slides\Cloud\Sdk\Model\Requests;
/*
 * Request model for putSlidesSlideSize operation.
 */
class PutSlidesSlideSizeRequest
{
    /*
     * Document name.
     */
    public $name;

    /*
     * Document password.
     */
    public $password;

    /*
     * Document storage.
     */
    public $storage;

    /*
     * Document folder.
     */
    public $folder;

    /*
     * Slide width.
     */
    public $width;

    /*
     * Slide height.
     */
    public $height;

    /*
     * Standard slide size type.
     */
    public $sizeType;

    /*
     * Standard slide scale type.
     */
    public $scaleType;

    /*
     * Initializes a new instance of the PutSlidesSlideSizeRequest class.
     *  
     * @param string $name Document name.
     * @param string $password Document password.
     * @param string $storage Document storage.
     * @param string $folder Document folder.
     * @param int $width Slide width.
     * @param int $height Slide height.
     * @param string $sizeType Standard slide size type.
     * @param string $scaleType Standard slide scale type.
     */
    public function __construct($name, $password = null, $storage = null, $folder = null, $width = null, $height = null, $sizeType = null, $scaleType = null)
    {
        $this->name = $name;
        $this->password = $password;
        $this->storage = $storage;
        $this->folder = $folder;
        $this->width = $width;
        $this->height = $height;
        $this->sizeType = $sizeType;
        $this->scaleType = $scaleType;
    }

    /*
     * Document name.
     */
    public function get_name()
    {
        return $this->name;
    }

    /*
     * Document name.
     */
    public function set_name($value)
    {
        $this->name = $value;
        return $this;
    }
    /*
     * Document password.
     */
    public function get_password()
    {
        return $this->password;
    }

    /*
     * Document password.
     */
    public function set_password($value)
    {
        $this->password = $value;
        return $this;
    }
    /*
     * Document storage.
     */
    public function get_storage()
    {
        return $this->storage;
    }

    /*
     * Document storage.
     */
    public function set_storage($value)
    {
        $this->storage = $value;
        return $this;
    }
    /*
     * Document folder.
     */
    public function get_folder()
    {
        return $this->folder;
    }

    /*
     * Document folder.
     */
    public function set_folder($value)
    {
        $this->folder = $value;
        return $this;
    }
    /*
     * Slide width.
     */
    public function get_width()
    {
        return $this->width;
    }

    /*
     * Slide width.
     */
    public function set_width($value)
    {
        $this->width = $value;
        return $this;
    }
    /*
     * Slide height.
     */
    public function get_height()
    {
        return $this->height;
    }

    /*
     * Slide height.
     */
    public function set_height($value)
    {
        $this->height = $value;
        return $this;
    }
    /*
     * Standard slide size type.
     */
    public function get_sizeType()
    {
        return $this->sizeType;
    }

    /*
     * Standard slide size type.
     */
    public function set_sizeType($value)
    {
        $this->sizeType = $value;
        return $this;
    }
    /*
     * Standard slide scale type.
     */
    public function get_scaleType()
    {
        return $this->scaleType;
    }

    /*
     * Standard slide scale type.
     */
    public function set_scaleType($value)
    {
        $this->scaleType = $value;
        return $this;
    }
}
