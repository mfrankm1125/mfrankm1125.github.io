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

class GeostoreTemporaryClosureProto extends \Google\Model
{
  /**
   * @var GeostoreDateTimeProto
   */
  public $endAsOfDate;
  protected $endAsOfDateType = GeostoreDateTimeProto::class;
  protected $endAsOfDateDataType = '';
  /**
   * @var GeostoreDateTimeProto
   */
  public $endDate;
  protected $endDateType = GeostoreDateTimeProto::class;
  protected $endDateDataType = '';
  /**
   * @var GeostoreDateTimeProto
   */
  public $startAsOfDate;
  protected $startAsOfDateType = GeostoreDateTimeProto::class;
  protected $startAsOfDateDataType = '';
  /**
   * @var GeostoreDateTimeProto
   */
  public $startDate;
  protected $startDateType = GeostoreDateTimeProto::class;
  protected $startDateDataType = '';

  /**
   * @param GeostoreDateTimeProto
   */
  public function setEndAsOfDate(GeostoreDateTimeProto $endAsOfDate)
  {
    $this->endAsOfDate = $endAsOfDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getEndAsOfDate()
  {
    return $this->endAsOfDate;
  }
  /**
   * @param GeostoreDateTimeProto
   */
  public function setEndDate(GeostoreDateTimeProto $endDate)
  {
    $this->endDate = $endDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getEndDate()
  {
    return $this->endDate;
  }
  /**
   * @param GeostoreDateTimeProto
   */
  public function setStartAsOfDate(GeostoreDateTimeProto $startAsOfDate)
  {
    $this->startAsOfDate = $startAsOfDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getStartAsOfDate()
  {
    return $this->startAsOfDate;
  }
  /**
   * @param GeostoreDateTimeProto
   */
  public function setStartDate(GeostoreDateTimeProto $startDate)
  {
    $this->startDate = $startDate;
  }
  /**
   * @return GeostoreDateTimeProto
   */
  public function getStartDate()
  {
    return $this->startDate;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeostoreTemporaryClosureProto::class, 'Google_Service_Contentwarehouse_GeostoreTemporaryClosureProto');
