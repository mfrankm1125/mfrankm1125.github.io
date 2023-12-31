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

namespace Google\Service\BigQueryReservation;

class SplitCapacityCommitmentResponse extends \Google\Model
{
  /**
   * @var CapacityCommitment
   */
  public $first;
  protected $firstType = CapacityCommitment::class;
  protected $firstDataType = '';
  /**
   * @var CapacityCommitment
   */
  public $second;
  protected $secondType = CapacityCommitment::class;
  protected $secondDataType = '';

  /**
   * @param CapacityCommitment
   */
  public function setFirst(CapacityCommitment $first)
  {
    $this->first = $first;
  }
  /**
   * @return CapacityCommitment
   */
  public function getFirst()
  {
    return $this->first;
  }
  /**
   * @param CapacityCommitment
   */
  public function setSecond(CapacityCommitment $second)
  {
    $this->second = $second;
  }
  /**
   * @return CapacityCommitment
   */
  public function getSecond()
  {
    return $this->second;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SplitCapacityCommitmentResponse::class, 'Google_Service_BigQueryReservation_SplitCapacityCommitmentResponse');
