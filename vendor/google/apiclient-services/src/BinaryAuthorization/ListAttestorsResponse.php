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

namespace Google\Service\BinaryAuthorization;

class ListAttestorsResponse extends \Google\Collection
{
  protected $collection_key = 'attestors';
  /**
   * @var Attestor[]
   */
  public $attestors;
  protected $attestorsType = Attestor::class;
  protected $attestorsDataType = 'array';
  /**
   * @var string
   */
  public $nextPageToken;

  /**
   * @param Attestor[]
   */
  public function setAttestors($attestors)
  {
    $this->attestors = $attestors;
  }
  /**
   * @return Attestor[]
   */
  public function getAttestors()
  {
    return $this->attestors;
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
class_alias(ListAttestorsResponse::class, 'Google_Service_BinaryAuthorization_ListAttestorsResponse');
