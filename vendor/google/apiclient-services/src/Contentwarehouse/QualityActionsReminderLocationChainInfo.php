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

namespace Google\Service\Contentwarehouse;

class QualityActionsReminderLocationChainInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $chainMid;
  /**
   * @var string
   */
  public $chainName;
  /**
   * @var GeostoreFeatureIdProto
   */
  public $featureId;
  protected $featureIdType = GeostoreFeatureIdProto::class;
  protected $featureIdDataType = '';

  /**
   * @param string
   */
  public function setChainMid($chainMid)
  {
    $this->chainMid = $chainMid;
  }
  /**
   * @return string
   */
  public function getChainMid()
  {
    return $this->chainMid;
  }
  /**
   * @param string
   */
  public function setChainName($chainName)
  {
    $this->chainName = $chainName;
  }
  /**
   * @return string
   */
  public function getChainName()
  {
    return $this->chainName;
  }
  /**
   * @param GeostoreFeatureIdProto
   */
  public function setFeatureId(GeostoreFeatureIdProto $featureId)
  {
    $this->featureId = $featureId;
  }
  /**
   * @return GeostoreFeatureIdProto
   */
  public function getFeatureId()
  {
    return $this->featureId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(QualityActionsReminderLocationChainInfo::class, 'Google_Service_Contentwarehouse_QualityActionsReminderLocationChainInfo');
