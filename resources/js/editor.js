import domReady from '@wordpress/dom-ready';
import { addFilter } from '@wordpress/hooks';
import { createHigherOrderComponent } from '@wordpress/compose';
import { InspectorControls } from '@wordpress/block-editor';
import { Button } from '@wordpress/components';
import { createElement as el, Fragment, useEffect, useState } from '@wordpress/element';

import '../css/editor-ui.css';

domReady(() => {
  //
});

/**
 * Pola bloków ACF w modalu zamiast w panelu bocznym.
 *
 * Formularz ACF zostaje tam, gdzie renderuje go ACF (InspectorControls),
 * bo przeniesienie go w inne miejsce DOM zepsułoby Reacta. Zamiast tego
 * w panelu bocznym jest tylko przycisk, a klasa na body zamienia panel ACF
 * w modal (style w editor-ui.css).
 */
const OPEN_CLASS = 'flr-acf-modal-open';

const withAcfModal = createHigherOrderComponent((BlockEdit) => (props) => {
  const [isOpen, setOpen] = useState(false);
  const isAcf = props.name?.startsWith('acf/');

  useEffect(() => {
    if (!props.isSelected) {
      setOpen(false);
    }
  }, [props.isSelected]);

  useEffect(() => {
    if (!isOpen) {
      return undefined;
    }

    const onKeyDown = (event) => {
      if (event.key === 'Escape') {
        setOpen(false);
      }
    };

    document.body.classList.add(OPEN_CLASS);
    document.addEventListener('keydown', onKeyDown);

    return () => {
      document.body.classList.remove(OPEN_CLASS);
      document.removeEventListener('keydown', onKeyDown);
    };
  }, [isOpen]);

  if (!isAcf) {
    return el(BlockEdit, props);
  }

  return el(
    Fragment,
    null,
    el(BlockEdit, props),
    el(
      InspectorControls,
      null,
      el(
        'div',
        { className: 'flr-acf-modal-trigger' },
        el(Button, { variant: 'primary', onClick: () => setOpen(true) }, 'Edytuj blok'),
      ),
      isOpen && el('div', { className: 'flr-acf-modal-backdrop', onClick: () => setOpen(false) }),
      isOpen && el(Button, {
        className: 'flr-acf-modal-close',
        icon: 'no-alt',
        label: 'Zamknij',
        onClick: () => setOpen(false),
      }),
    ),
  );
}, 'withAcfModal');

addFilter('editor.BlockEdit', 'flr/acf-modal', withAcfModal);
