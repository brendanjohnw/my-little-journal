import Base from '../misc/base';

export default function HomePage(params) {
    const fields = {
        'journal-title': {
            'id': '#journal-title',
            'on': {
                'change': function (event){
                    base.validateField(event.currentTarget);
                }
            },
            'payload': true
        },
        'journal-content': {
            'id': '#journal-content',
            'on': {
                'change': function (event) {
                    base.validateField(event.currentTarget);
                }
            },
            'payload': true
        },
        'submit-button': {
            'id': '#submit-button',
            'on': {
                'click': function(event) {
                    event.stopImmediatePropagation();

                    event.preventDefault();

                    const isFormValid = base.validateAllFields();

                    if (isFormValid) {
                        $('#musing-form').attr('action','/submit-musing');
                        $('#musing-form').trigger("submit");
                    } else {
                        console.log('Form is invalid. Please correct the errors.');
                    }
                }
            },
            'payload': false
        }
    }

    const rules = {
        'journal-title': function(value) {
            if (value) {
                return true;
            }
            return false;
        },
        'journal-content': function(value) {
            if (value) {
                return true;
            }
            return false;
        },
        'submit-button': function() {
            return true;
        }
    }

    const base = new Base({
        fields: fields,
        rules: rules,
        context: this,
    });

}


