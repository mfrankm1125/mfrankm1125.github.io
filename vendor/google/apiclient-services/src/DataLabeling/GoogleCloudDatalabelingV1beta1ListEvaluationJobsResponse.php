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

class GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse extends \Google\Collection
{
  protected $collection_key = 'evaluationJobs';
  /**
   * @var GoogleCloudDatalabelingV1beta1EvaluationJob[]
   */
  public $evaluationJobs;
  protected $evaluationJobsType = GoogleCloudDatalabelingV1beta1EvaluationJob::class;
  protected $evaluationJobsDataType = 'array';
  /**
   * @var string
   */
  public $nextPageToken;

  /**
   * @param GoogleCloudDatalabelingV1beta1EvaluationJob[]
   */
  public function setEvaluationJobs($evaluationJobs)
  {
    $this->evaluationJobs = $evaluationJobs;
  }
  /**
   * @return GoogleCloudDatalabelingV1beta1EvaluationJob[]
   */
  public function getEvaluationJobs()
  {
    return $this->evaluationJobs;
  }
  /**
   * @param string
   */
  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }
  /**
   * @return string
   */
  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse::class, 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ListEvaluationJobsResponse');
