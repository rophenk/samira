<?php namespace App\Http;

function renderingNode($node) {

      if( $node->isLeaf() ) {
        return '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name . '</div>
                </li>';
      } else {
        $html = '<li class="dd-item dd3-item">
                  <div class="dd-handle dd3-handle"> </div>
                  <div class="dd3-content">' . $node->name. '</div>';

        $html .= '<ol class="dd-list>';

        foreach($node->children as $child)
          $html .= renderNode($child);

        $html .= '</ol class="dd-list>';

        $html .= '</li>';
      }

      return $html;
    }