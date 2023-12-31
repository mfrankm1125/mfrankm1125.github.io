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

namespace Google\Service\AndroidManagement;

class TermsAndConditions extends \Google\Model
{
  /**
   * @var UserFacingMessage
   */
  public $content;
  protected $contentType = UserFacingMessage::class;
  protected $contentDataType = '';
  /**
   * @var UserFacingMessage
   */
  public $header;
  protected $headerType = UserFacingMessage::class;
  protected $headerDataType = '';

  /**
   * @param UserFacingMessage
   */
  public function setContent(UserFacingMessage $content)
  {
    $this->content = $content;
  }
  /**
   * @return UserFacingMessage
   */
  public function getContent()
  {
    return $this->content;
  }
  /**
   * @param UserFacingMessage
   */
  public function setHeader(UserFacingMessage $header)
  {
    $this->header = $header;
  }
  /**
   * @return UserFacingMessage
   */
  public function getHeader()
  {
    return $this->header;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TermsAndConditions::class, 'Google_Service_AndroidManagement_TermsAndConditions');
