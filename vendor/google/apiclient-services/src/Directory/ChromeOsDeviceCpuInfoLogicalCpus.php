<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Directory;

class ChromeOsDeviceCpuInfoLogicalCpus extends \Google\Collection
{
  protected $collection_key = 'cStates';
  /**
   * @var ChromeOsDeviceCpuInfoLogicalCpusCStates[]
   */
  public $cStates;
  protected $cStatesType = ChromeOsDeviceCpuInfoLogicalCpusCStates::class;
  protected $cStatesDataType = 'array';
  /**
   * @var int
   */
  public $currentScalingFrequencyKhz;
  /**
   * @var string
   */
  public $idleDuration;
  /**
   * @var int
   */
  public $maxScalingFrequencyKhz;

  /**
   * @param ChromeOsDeviceCpuInfoLogicalCpusCStates[]
   */
  public function setCStates($cStates)
  {
    $this->cStates = $cStates;
  }
  /**
   * @return ChromeOsDeviceCpuInfoLogicalCpusCStates[]
   */
  public function getCStates()
  {
    return $this->cStates;
  }
  /**
   * @param int
   */
  public function setCurrentScalingFrequencyKhz($currentScalingFrequencyKhz)
  {
    $this->currentScalingFrequencyKhz = $currentScalingFrequencyKhz;
  }
  /**
   * @return int
   */
  public function getCurrentScalingFrequencyKhz()
  {
    return $this->currentScalingFrequencyKhz;
  }
  /**
   * @param string
   */
  public function setIdleDuration($idleDuration)
  {
    $this->idleDuration = $idleDuration;
  }
  /**
   * @return string
   */
  public function getIdleDuration()
  {
    return $this->idleDuration;
  }
  /**
   * @param int
   */
  public function setMaxScalingFrequencyKhz($maxScalingFrequencyKhz)
  {
    $this->maxScalingFrequencyKhz = $maxScalingFrequencyKhz;
  }
  /**
   * @return int
   */
  public function getMaxScalingFrequencyKhz()
  {
    return $this->maxScalingFrequencyKhz;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChromeOsDeviceCpuInfoLogicalCpus::class, 'Google_Service_Directory_ChromeOsDeviceCpuInfoLogicalCpus');
