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

namespace Google\Service\CloudSearch;

class NamedProperty extends \Google\Model
{
  /**
   * @var bool
   */
  public $booleanValue;
  /**
   * @var DateValues
   */
  public $dateValues;
  protected $dateValuesType = DateValues::class;
  protected $dateValuesDataType = '';
  /**
   * @var DoubleValues
   */
  public $doubleValues;
  protected $doubleValuesType = DoubleValues::class;
  protected $doubleValuesDataType = '';
  /**
   * @var EnumValues
   */
  public $enumValues;
  protected $enumValuesType = EnumValues::class;
  protected $enumValuesDataType = '';
  /**
   * @var HtmlValues
   */
  public $htmlValues;
  protected $htmlValuesType = HtmlValues::class;
  protected $htmlValuesDataType = '';
  /**
   * @var IntegerValues
   */
  public $integerValues;
  protected $integerValuesType = IntegerValues::class;
  protected $integerValuesDataType = '';
  /**
   * @var string
   */
  public $name;
  /**
   * @var ObjectValues
   */
  public $objectValues;
  protected $objectValuesType = ObjectValues::class;
  protected $objectValuesDataType = '';
  /**
   * @var TextValues
   */
  public $textValues;
  protected $textValuesType = TextValues::class;
  protected $textValuesDataType = '';
  /**
   * @var TimestampValues
   */
  public $timestampValues;
  protected $timestampValuesType = TimestampValues::class;
  protected $timestampValuesDataType = '';

  /**
   * @param bool
   */
  public function setBooleanValue($booleanValue)
  {
    $this->booleanValue = $booleanValue;
  }
  /**
   * @return bool
   */
  public function getBooleanValue()
  {
    return $this->booleanValue;
  }
  /**
   * @param DateValues
   */
  public function setDateValues(DateValues $dateValues)
  {
    $this->dateValues = $dateValues;
  }
  /**
   * @return DateValues
   */
  public function getDateValues()
  {
    return $this->dateValues;
  }
  /**
   * @param DoubleValues
   */
  public function setDoubleValues(DoubleValues $doubleValues)
  {
    $this->doubleValues = $doubleValues;
  }
  /**
   * @return DoubleValues
   */
  public function getDoubleValues()
  {
    return $this->doubleValues;
  }
  /**
   * @param EnumValues
   */
  public function setEnumValues(EnumValues $enumValues)
  {
    $this->enumValues = $enumValues;
  }
  /**
   * @return EnumValues
   */
  public function getEnumValues()
  {
    return $this->enumValues;
  }
  /**
   * @param HtmlValues
   */
  public function setHtmlValues(HtmlValues $htmlValues)
  {
    $this->htmlValues = $htmlValues;
  }
  /**
   * @return HtmlValues
   */
  public function getHtmlValues()
  {
    return $this->htmlValues;
  }
  /**
   * @param IntegerValues
   */
  public function setIntegerValues(IntegerValues $integerValues)
  {
    $this->integerValues = $integerValues;
  }
  /**
   * @return IntegerValues
   */
  public function getIntegerValues()
  {
    return $this->integerValues;
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
   * @param ObjectValues
   */
  public function setObjectValues(ObjectValues $objectValues)
  {
    $this->objectValues = $objectValues;
  }
  /**
   * @return ObjectValues
   */
  public function getObjectValues()
  {
    return $this->objectValues;
  }
  /**
   * @param TextValues
   */
  public function setTextValues(TextValues $textValues)
  {
    $this->textValues = $textValues;
  }
  /**
   * @return TextValues
   */
  public function getTextValues()
  {
    return $this->textValues;
  }
  /**
   * @param TimestampValues
   */
  public function setTimestampValues(TimestampValues $timestampValues)
  {
    $this->timestampValues = $timestampValues;
  }
  /**
   * @return TimestampValues
   */
  public function getTimestampValues()
  {
    return $this->timestampValues;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NamedProperty::class, 'Google_Service_CloudSearch_NamedProperty');
