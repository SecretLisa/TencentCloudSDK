<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Facefusion\V20181201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 视频人脸融合返回结果
 *
 * @method string getVideoUrl() 获取视频人脸融合输出的视频url地址
 * @method void setVideoUrl(string $VideoUrl) 设置视频人脸融合输出的视频url地址
 * @method string getVideoMD5() 获取视频人脸融合输出的视频MD5，用于校验
 * @method void setVideoMD5(string $VideoMD5) 设置视频人脸融合输出的视频MD5，用于校验
 * @method integer getWidth() 获取视频宽度
 * @method void setWidth(integer $Width) 设置视频宽度
 * @method integer getHeight() 获取视频高度
 * @method void setHeight(integer $Height) 设置视频高度
 * @method integer getFPS() 获取每秒传输帧数
 * @method void setFPS(integer $FPS) 设置每秒传输帧数
 * @method float getDurationInSec() 获取视频播放时长，单位为秒
 * @method void setDurationInSec(float $DurationInSec) 设置视频播放时长，单位为秒
 * @method integer getFrame() 获取帧数
 * @method void setFrame(integer $Frame) 设置帧数
 */
class VideoFaceFusionOutput extends AbstractModel
{
    /**
     * @var string 视频人脸融合输出的视频url地址
     */
    public $VideoUrl;

    /**
     * @var string 视频人脸融合输出的视频MD5，用于校验
     */
    public $VideoMD5;

    /**
     * @var integer 视频宽度
     */
    public $Width;

    /**
     * @var integer 视频高度
     */
    public $Height;

    /**
     * @var integer 每秒传输帧数
     */
    public $FPS;

    /**
     * @var float 视频播放时长，单位为秒
     */
    public $DurationInSec;

    /**
     * @var integer 帧数
     */
    public $Frame;

    /**
     * @param string $VideoUrl 视频人脸融合输出的视频url地址
     * @param string $VideoMD5 视频人脸融合输出的视频MD5，用于校验
     * @param integer $Width 视频宽度
     * @param integer $Height 视频高度
     * @param integer $FPS 每秒传输帧数
     * @param float $DurationInSec 视频播放时长，单位为秒
     * @param integer $Frame 帧数
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VideoUrl",$param) and $param["VideoUrl"] !== null) {
            $this->VideoUrl = $param["VideoUrl"];
        }

        if (array_key_exists("VideoMD5",$param) and $param["VideoMD5"] !== null) {
            $this->VideoMD5 = $param["VideoMD5"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("FPS",$param) and $param["FPS"] !== null) {
            $this->FPS = $param["FPS"];
        }

        if (array_key_exists("DurationInSec",$param) and $param["DurationInSec"] !== null) {
            $this->DurationInSec = $param["DurationInSec"];
        }

        if (array_key_exists("Frame",$param) and $param["Frame"] !== null) {
            $this->Frame = $param["Frame"];
        }
    }
}
