<?php

namespace HTMLKit;

/**
 * Classe que representa o elemento HTML <div></div>
 *
 * Exemplo:
 * <code>
 *   $div = new \HTMLKit\HTMLDiv();
 *   $div->addElement(new HTMLParagraph("Hello World");
 *   $div->toHTML();
 *
 *   <!-- O exemplo acima irá resultar: -->
 *   <div>
 *     <p>Hello World</p>
 *   </div>
 * 
 * </code>
 *
 * @author thiago
 */
class HTMLDiv extends \HTMLKit\HTMLElement {

  /**
   *
   * @param \HTMLKit\HTMLElement $element
   * @param String $class
   * @param String $id
   * @param String $name
   * @param String $comment
   * @param String $title
   * @return \HTMLKit\HTMLElement $element
   */
  function __construct(HTMLElement $element = null, $class = null, $id = null, $name = null, $comment = null, $title = null) {
    if(!is_null($element)){
      $this->addElements($element);
    }
    return parent::__construct("div", $class, $id, $name, $comment, $title);
  }


}

?>