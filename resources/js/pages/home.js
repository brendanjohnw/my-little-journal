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
    // Source: https://www.w3schools.com/js/tryit.asp?filename=tryjs_timing_clock

    function startTime() {
        const today = new Date();
        let h = today.getHours();
        let m = today.getMinutes();
        let s = today.getSeconds();
        const ampm = h >= 12 ? 'PM' : 'AM';
        h = h % 12;
        h = h ? h : 12; 
        m = checkTime(m);
        s = checkTime(s);
    
        const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        const date = today.toLocaleDateString(undefined, options);
    
        document.getElementById('clock').innerHTML =  "<div class='time'>"+h+ ":" + m + " " + ampm + "</div>" + date ;
        setTimeout(startTime, 1000);
    }
    
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i;
        }
        return i;
    }

    startTime();

}


