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

namespace Google\Service\RecaptchaEnterprise;

class GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse extends \Google\Collection
{
  protected $collection_key = 'relatedAccountGroupMemberships';
  /**
   * @var string
   */
  public $nextPageToken;
  /**
   * @var GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[]
   */
  public $relatedAccountGroupMemberships;
  protected $relatedAccountGroupMembershipsType = GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership::class;
  protected $relatedAccountGroupMembershipsDataType = 'array';

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
  /**
   * @param GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[]
   */
  public function setRelatedAccountGroupMemberships($relatedAccountGroupMemberships)
  {
    $this->relatedAccountGroupMemberships = $relatedAccountGroupMemberships;
  }
  /**
   * @return GoogleCloudRecaptchaenterpriseV1RelatedAccountGroupMembership[]
   */
  public function getRelatedAccountGroupMemberships()
  {
    return $this->relatedAccountGroupMemberships;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse::class, 'Google_Service_RecaptchaEnterprise_GoogleCloudRecaptchaenterpriseV1SearchRelatedAccountGroupMembershipsResponse');
