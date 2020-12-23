require('./bootstrap');
import 'alpinejs'
import { createPopper } from '@popperjs/core';

const button = document.querySelector('#button');
const tooltip = document.querySelector('#tooltip');

// Pass the button, the tooltip, and some options, and Popper will do the
// magic positioning for you:
createPopper(button, tooltip, {
    placement: 'right',
});


function handler() {
    return {
        fields: [],
        addNewField() {
            this.fields.push({
                txt1: '',
                txt2: ''
            });
        },
        removeField(index) {
            this.fields.splice(index, 1);
        }
    }
}
