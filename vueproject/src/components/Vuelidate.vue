<template>
    <div>
        <h1>Hello Vuelidate</h1>
        <div>
            <div v-for="(person, index) in people">
                <div class="form-group" v-bind:class="{ 'form-group--error': $v.people.$each[index].$error }">
                    <label class="form__label">Name for {{ index+1 }}</label>
                    <input class="form__input" v-model.trim="person.name" @input="$v.people.$each[index].name.$touch()">
                </div><span class="form-group__message" v-if="!$v.people.$each[index].name.required">Name is required.</span><span class="form-group__message" v-if="!$v.people.$each[index].name.minLength">Name must have at least {{ $v.people.$each[index].name.$params.minLength.min }} letters.</span>
            </div>
            <div>
                <button class="button" @click="people.push({name: ''})">Add</button>
                <button class="button" @click="people.pop()">Remove</button>
            </div>
            <div class="form-group" v-bind:class="{ 'form-group--error': $v.people.$error }"></div><span class="form-group__message" v-if="!$v.people.minLength">List must have at least {{ $v.people.$params.minLength.min }} elements.</span><span class="form-group__message" v-else-if="!$v.people.required">List must not be empty.</span><span class="form-group__message" v-else-if="$v.people.$error">List is invalid.</span>
            <button class="button" @click="$v.people.$touch">$touch</button>
            <button class="button" @click="$v.people.$reset">$reset</button>
            <pre>people: {{ $v.people }}</pre>
        </div>
    </div>

</template>

<script>

    import { required, minLength } from 'vuelidate/lib/validators'

    export default {
        data () {
            return {
                people: [{
                    name: 'John'
                }, {
                    name: ''
                }]
            }
        },
        validations: {

            people: {
                required,
                minLength: minLength(3),
                $each: {
                    name: {
                        required,
                        minLength: minLength(2)
                    }
                }
            }

        }
    }

</script>

<style>
    input {
        border: 1px solid silver;
        border-radius: 4px;
        background: white;
        padding: 5px 10px;
    }

    .error {
        border-color: red;
        background: #FDD;
    }

    .error:focus {
        outline-color: #F99;
    }

    .valid {
        border-color: #5A5;
        background: #EFE;
    }

    .valid:focus {
        outline-color: #8E8;
    }
</style>