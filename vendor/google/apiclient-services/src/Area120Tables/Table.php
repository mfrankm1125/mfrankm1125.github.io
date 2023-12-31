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

namespace Google\Service\Area120Tables;

class Table extends \Google\Collection
{
  protected $collection_key = 'savedViews';
  /**
   * @var ColumnDescription[]
   */
  public $columns;
  protected $columnsType = ColumnDescription::class;
  protected $columnsDataType = 'array';
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $displayName;
  /**
   * @var string
   */
  public $name;
  /**
   * @var SavedView[]
   */
  public $savedViews;
  protected $savedViewsType = SavedView::class;
  protected $savedViewsDataType = 'array';
  /**
   * @var string
   */
  public $timeZone;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param ColumnDescription[]
   */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /**
   * @return ColumnDescription[]
   */
  public function getColumns()
  {
    return $this->columns;
  }
  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }
  /**
   * @return string
   */
  public function getDisplayName()
  {
    return $this->displayName;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param SavedView[]
   */
  public function setSavedViews($savedViews)
  {
    $this->savedViews = $savedViews;
  }
  /**
   * @return SavedView[]
   */
  public function getSavedViews()
  {
    return $this->savedViews;
  }
  /**
   * @param string
   */
  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }
  /**
   * @return string
   */
  public function getTimeZone()
  {
    return $this->timeZone;
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
class_alias(Table::class, 'Google_Service_Area120Tables_Table');
