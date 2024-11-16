class Base {
    constructor({ fields, rules, context }) {
        this.fields = fields;
        this.rules = rules;
        this.context = context;

        // Initialize field event listeners
        this.initFields();
    }

    initFields() {
        for (const [fieldName, fieldConfig] of Object.entries(this.fields)) {
            const element = document.querySelector(fieldConfig.id);

            if (element && fieldConfig.on) {
                for (const [eventType, handler] of Object.entries(fieldConfig.on)) {
                    element.addEventListener(eventType, (event) => {
                        // Call the field-specific event handler
                        handler.call(this.context, event);

                        // Validate the field on event trigger
                        this.validateField(fieldName, event.target.value);
                    });
                }
            }
        }
    }

    validateField(fieldName, value) {
        const rule = this.rules[fieldName];

        if (rule) {
            const isValid = rule(value);
            const fieldConfig = this.fields[fieldName];
            const element = document.querySelector(fieldConfig.id);

            if (element) {
                if (isValid) {
                    element.classList.remove('is-invalid');
                    element.classList.add('is-valid');
                } else {
                    element.classList.remove('is-valid');
                    element.classList.add('is-invalid');
                }
            }
        }
    }

    validateAllFields() {
        let allValid = true;

        for (const fieldName of Object.keys(this.fields)) {
            const element = document.querySelector(this.fields[fieldName].id);

            if (element) {
                const value = element.value;
                const isValid = this.rules[fieldName](value);

                if (!isValid) {
                    allValid = false;
                }

                this.validateField(fieldName, value);
            }
        }

        return allValid;
    }
}

export default Base;
