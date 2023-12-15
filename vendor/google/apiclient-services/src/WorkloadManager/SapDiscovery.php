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

namespace Google\Service\WorkloadManager;

class SapDiscovery extends \Google\Model
{
  /**
   * @var SapDiscoveryComponent
   */
  public $applicationLayer;
  protected $applicationLayerType = SapDiscoveryComponent::class;
  protected $applicationLayerDataType = '';
  /**
   * @var SapDiscoveryComponent
   */
  public $databaseLayer;
  protected $databaseLayerType = SapDiscoveryComponent::class;
  protected $databaseLayerDataType = '';
  /**
   * @var SapDiscoveryMetadata
   */
  public $metadata;
  protected $metadataType = SapDiscoveryMetadata::class;
  protected $metadataDataType = '';
  /**
   * @var string
   */
  public $systemId;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param SapDiscoveryComponent
   */
  public function setApplicationLayer(SapDiscoveryComponent $applicationLayer)
  {
    $this->applicationLayer = $applicationLayer;
  }
  /**
   * @return SapDiscoveryComponent
   */
  public function getApplicationLayer()
  {
    return $this->applicationLayer;
  }
  /**
   * @param SapDiscoveryComponent
   */
  public function setDatabaseLayer(SapDiscoveryComponent $databaseLayer)
  {
    $this->databaseLayer = $databaseLayer;
  }
  /**
   * @return SapDiscoveryComponent
   */
  public function getDatabaseLayer()
  {
    return $this->databaseLayer;
  }
  /**
   * @param SapDiscoveryMetadata
   */
  public function setMetadata(SapDiscoveryMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return SapDiscoveryMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
  /**
   * @param string
   */
  public function setSystemId($systemId)
  {
    $this->systemId = $systemId;
  }
  /**
   * @return string
   */
  public function getSystemId()
  {
    return $this->systemId;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SapDiscovery::class, 'Google_Service_WorkloadManager_SapDiscovery');
