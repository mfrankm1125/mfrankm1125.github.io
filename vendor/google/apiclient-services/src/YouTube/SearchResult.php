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

namespace Google\Service\YouTube;

class SearchResult extends \Google\Model
{
  /**
   * @var string
   */
  public $etag;
  /**
   * @var ResourceId
   */
  public $id;
  protected $idType = ResourceId::class;
  protected $idDataType = '';
  /**
   * @var string
   */
  public $kind;
  /**
   * @var SearchResultSnippet
   */
  public $snippet;
  protected $snippetType = SearchResultSnippet::class;
  protected $snippetDataType = '';

  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param ResourceId
   */
  public function setId(ResourceId $id)
  {
    $this->id = $id;
  }
  /**
   * @return ResourceId
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param SearchResultSnippet
   */
  public function setSnippet(SearchResultSnippet $snippet)
  {
    $this->snippet = $snippet;
  }
  /**
   * @return SearchResultSnippet
   */
  public function getSnippet()
  {
    return $this->snippet;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SearchResult::class, 'Google_Service_YouTube_SearchResult');
