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

namespace Google\Service\DataLabeling;

class GoogleCloudDatalabelingV1beta1Row extends \Google\Collection
{
  protected $collection_key = 'entries';
  /**
   * @var GoogleCloudDatalabelingV1beta1AnnotationSpec
   */
  public $annotationSpec;
  protected $annotationSpecType = GoogleCloudDatalabelingV1beta1AnnotationSpec::class;
  protected $annotationSpecDataType = '';
  /**
   * @var GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[]
   */
  public $entries;
  protected $entriesType = GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry::class;
  protected $entriesDataType = 'array';

  /**
   * @param GoogleCloudDatalabelingV1beta1AnnotationSpec
   */
  public function setAnnotationSpec(GoogleCloudDatalabelingV1beta1AnnotationSpec $annotationSpec)
  {
    $this->annotationSpec = $annotationSpec;
  }
  /**
   * @return GoogleCloudDatalabelingV1beta1AnnotationSpec
   */
  public function getAnnotationSpec()
  {
    return $this->annotationSpec;
  }
  /**
   * @param GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[]
   */
  public function setEntries($entries)
  {
    $this->entries = $entries;
  }
  /**
   * @return GoogleCloudDatalabelingV1beta1ConfusionMatrixEntry[]
   */
  public function getEntries()
  {
    return $this->entries;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatalabelingV1beta1Row::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1Row');
