'use strict'

const changeChecked = () => {
    const sw5 = document.querySelector('#switch5');
    const sw1 = document.querySelector('#switch1');

    sw5.addEventListener('click', function () {
        if (sw5.checked) {
            sw1.checked = true;
            sw5.checked = false;
        }
    })

    if (sw1.checked) {
        sw5.style.background = 'red'
    }
}
changeChecked();

const checkCloudPosition = () => {
    const cloud_popup_title = document.querySelector('#cloud-popup-h3');
    const cloud_popup = document.querySelector('#cloud-popup');
    const cloud_popup_cross = document.querySelector('#cloud-popup-cross');
    const cloud_popup_text = document.querySelector('#cloud-popup-text');
    const cloud_popup_record = document.querySelectorAll('#cloud-popup-record input');
    const cloud_popup_span = document.querySelectorAll('#cloud-popup-record span');

    const banner = document.querySelector('#banner');
    const banner_border = banner.getBoundingClientRect().bottom;

    const presentation = document.querySelector('#presentation');
    const presentation_border = presentation.getBoundingClientRect().bottom;

    const service = document.querySelector('#service');
    const service_border = service.getBoundingClientRect().bottom;

    const description = document.querySelector('#description');
    const description_border = description.getBoundingClientRect().bottom;

    const main_box_form = document.querySelector('#form');
    const main_box_form_border = main_box_form.getBoundingClientRect().bottom;

    const proposal = document.querySelector('#proposal');
    const proposal_border = proposal.getBoundingClientRect().bottom;

    const blog = document.querySelector('#blog');
    const blog_border = blog.getBoundingClientRect().bottom;

    const cloud = document.querySelector('#cloud');
    const cloudBottomCoordinate = cloud.getBoundingClientRect().top;

    const footer = document.querySelector('#footer');
    const footer_border = footer.getBoundingClientRect().bottom;

    const cloud_img = document.querySelector('#cloud img');

    const styleCloudWhite = () => {
        // cloud = document.querySelector('#cloud');
        cloud_img.src = "http://wf/wp-content/themes/WF/assets/img/cloud.png";
        cloud_popup_record.forEach((input) => {
            input.style.borderColor = '#3C3C3C';
            input.style.color = '#3C3C3C';
        });

        cloud_popup_span.forEach((span) => {
            span.style.color = '#3C3C3C';
        })

        cloud_popup_cross.src = "http://wf/wp-content/themes/WF/assets/img/closing-cross.png";
        cloud_popup.style.background = '#FFFFFF';
        cloud_popup_title.style.color = '#3C3C3C';
        cloud_popup_text.style.color = '#3C3C3C';
    }
    const styleCloudBlu = () => {
        cloud_img.src = "http://wf/wp-content/themes/WF/assets/img/cloud-blu.png";
        cloud_popup_record.forEach((input) => {
            input.style.borderColor = '#fff';
            input.style.color = '#fff';
        });
        cloud_popup_span.forEach((span) => {
            span.style.color = '#fff';
        })
        cloud_popup_cross.src = "http://wf/wp-content/themes/WF/assets/img/closing-cross-white.png";
        cloud_popup.style.background = '#447EF0';
        cloud_popup_title.style.color = '#ffffff';
        cloud_popup_text.style.color = '#ffffff';
    }

    if (banner_border > cloudBottomCoordinate) {
        styleCloudWhite();
    } else if (presentation_border > cloudBottomCoordinate) {
        styleCloudBlu();
    } else if (service_border > cloudBottomCoordinate) {
        styleCloudWhite();
    } else if (description_border > cloudBottomCoordinate) {
        styleCloudBlu();
    } else if (main_box_form_border > cloudBottomCoordinate) {
        styleCloudWhite();
    } else if (proposal_border > cloudBottomCoordinate) {
        styleCloudBlu();
    } else if (blog_border > cloudBottomCoordinate) {
        styleCloudBlu();
    } else if (footer_border > cloudBottomCoordinate) {
        styleCloudWhite();
    }
}
document.addEventListener('scroll', function () {
    checkCloudPosition();
}, {
    passive: true
});

const toggleMenuBurger = () => {
    const burger = document.querySelector('#burger');
    burger.addEventListener('click', () => {
        showMenuBurger();
        const burger1 = document.querySelector('#burger1');
        const burger2 = document.querySelector('#burger2');
        const burger3 = document.querySelector('#burger3');

        if (burger2.classList.contains('inline')) {
            burger1.style.transform = 'rotate(45deg)';
            burger1.style.transitionProperty = 'transform';
            burger1.style.transitionDuration = '0.5s';
            burger1.style.marginTop = '22px';
            burger2.classList.remove('inline');
            burger2.classList.add('hide');
            burger3.style.transform = 'rotate(-45deg)';
            burger3.style.marginTop = '-3px';
            burger3.style.transitionProperty = 'transform';
            burger3.style.transitionDuration = '0.5s';
        } else if (burger2.classList.contains('hide')) {
            burger1.style.transform = 'rotate(0deg)';
            burger1.style.transitionProperty = 'transform';
            burger1.style.transitionDuration = '0.1s';
            burger1.style.marginTop = '8px';
            burger2.classList.remove('hide');
            burger2.classList.add('inline');
            burger3.style.transform = 'rotate(0deg)';
            burger3.style.marginTop = '10px';
            burger3.style.transitionProperty = 'transform';
            burger3.style.transitionDuration = '0.1s';
        }


    })
}
toggleMenuBurger();

const navigationMenuBurger = () => {
    const burger_specialists = document.querySelector('#burger-specialists');
    const burger_nav_specialists = document.querySelector('#burger-nav_specialists');
    const popup_burger__info = document.querySelector('#popup-burger__info');
    const burger_popap_specialists = document.querySelector('#burger-popap_specialists');
    const front = document.querySelector('#front');

    burger_specialists.addEventListener('click', (e) => {
        if (e.target.innerText === 'IT-специалисты') {
            popup_burger__info.classList.add('hide');
            burger_nav_specialists.classList.remove('hide');
            burger_nav_specialists.classList.add('show');
        }
    })

    burger_nav_specialists.addEventListener('click', (e) => {
        if (e.target.innerText === 'IT-специалисты') {
            popup_burger__info.classList.remove('hide');
            popup_burger__info.classList.add('flex');
            burger_nav_specialists.classList.add('hide');
            burger_nav_specialists.classList.remove('show');
        }
    })

    front.addEventListener('click', (e) => {
        const submenu_front = document.querySelector('#submenu-front');
        if (e.target.className === 'front' && submenu_front.classList.contains('hide')) {
            submenu_front.classList.remove('hide');
            submenu_front.classList.add('show');
            burger_nav_specialists.style.paddingBottom = '100px';
        } else if (e.target.className === 'front' && submenu_front.classList.contains('show')) {
            submenu_front.classList.add('hide');
            submenu_front.classList.remove('show');
            // burger_nav_specialists.style.paddingBottom = '250px';
        }
    })


}
navigationMenuBurger();

const toggleOpenCloudPopup = () => {
    const cloud = document.querySelector('#cloud');
    cloud.addEventListener('click', () => {

        const cloud_popup = document.querySelector('#cloud-popup');
        const cloud_popup_record = document.querySelectorAll('#cloud-popup-record input');
        const cloud_popup_closing = document.querySelector('#cloud-popup-cross');
        const cloud_popup_span = document.querySelectorAll('#cloud-popup-record span');

        cloud_popup.classList.remove('hide');
        cloud_popup.classList.add('flex');

        cloud_popup_record.forEach((input) => {
            input.addEventListener('focus', () => {
                cloud_popup_span.forEach((span) => {
                    if (span.innerHTML === input.value) {
                        input.value = '';
                        span.classList.remove('hide');
                        span.classList.add('inline');
                    }
                })
            })
        })

        cloud_popup_closing.addEventListener('click', () => {
            cloud_popup.classList.remove('flex');
            cloud_popup.classList.add('hide');
        })
    });
}
toggleOpenCloudPopup();

const onTogglePopup = () => {
    const profession = document.querySelector("#profession");
    profession.addEventListener('click', () => {
        const popup = document.querySelector("#popup");
        if (popup.classList.contains('hide')) {
            popup.classList.add('show');
            popup.classList.remove('hide');
        } else {
            popup.classList.remove('show');
            popup.classList.add('hide');
        }
    });

}
onTogglePopup();

const closingPopup = () => {
    const closing_cross = document.querySelector("#closing_cross");
    closing_cross.addEventListener('click', () => {
        const popup = document.querySelector("#popup");
        popup.classList.remove('show');
        popup.classList.add('hide');
    });
}
closingPopup();

const showLessonPopup = () => {
    const specialists = document.querySelector("#popup__list_specialists");
    const lesson = document.querySelector("#popup__list_lesson");
    specialists.addEventListener('click', (e) => {
        if (e.target.innerText === 'Back-end разработчик') {
            specialists.style.display = 'none';
            lesson.classList.remove('hide');
            lesson.style.display = 'flex';
        }
    });
}
showLessonPopup();

const returnSpecialistPopup = () => {
    const lesson = document.querySelector("#popup__list_lesson");
    const specialists = document.querySelector("#popup__list_specialists");
    lesson.addEventListener('click', (e) => {
        if (e.target.innerText === 'Back-end разработчик') {
            specialists.style.display = 'flex';
            lesson.style.display = 'none';
        }
    });
}
returnSpecialistPopup();

const showInput = () => {
    const search = document.querySelector("#search");
    search.addEventListener('click', function showInput() {
        const menu_links = document.querySelector('#menu');
        const input_search = document.querySelector('#input-search');
        const header_phone = document.querySelector('#header__phone');

        if (input_search.classList.contains('hide')) {
            input_search.classList.remove('hide');
            menu_links.style.visibility = 'hidden';
            header_phone.style.width = '317px';
        } else {
            input_search.classList.add('hide');
            menu_links.style.visibility = 'visible';
            header_phone.style.width = 'unset';
        }

    });
}
showInput();

const sendForm = () => {
    const button_arrow = document.querySelector('#button_arrow__circle');
    const form_span = document.querySelectorAll('.form_inputs span');
    const form_inputs = document.querySelectorAll('.form_inputs input');
    button_arrow.addEventListener('click', function sendForm(e) {
        e.preventDefault();

        const input_name = document.querySelector('#input_name');
        const input_phone = document.querySelector('#input_phone');
        const input_email = document.querySelector('#input_email');

        if (input_name.value !== '' && input_name.value !== 'Имя' &&
            input_phone.value !== '' && input_phone.value !== 'Телефон' &&
            input_email.value !== '' && input_email.value !== 'Email') {

            const form_consultation = document.querySelector('#form_consultation');
            const form_popup = document.querySelector('#form_popup');

            form_consultation.classList.add('hide');
            form_popup.classList.remove('hide');
            form_popup.classList.add('block');

            setTimeout(() => {
                form_inputs.forEach((input) => {
                    form_span.forEach((span) => {
                        span.style.color = '#3C3C3C'
                        input.value = '';
                        input.style.borderColor = '#3C3C3C'
                    })
                })

                const error_correctly = document.querySelector('#error_correctly');
                const error_input_name = document.querySelector('#error_input-name');
                const error_input_phone = document.querySelector('#error_input-phone');
                const error_input_email = document.querySelector('#error_input-email');

                error_input_email.classList.remove('inline');
                error_input_email.classList.add('hide');
                error_input_phone.classList.remove('inline');
                error_input_phone.classList.add('hide');
                error_input_name.classList.remove('inline');
                error_input_name.classList.add('hide');
                error_correctly.classList.remove('inline');
                error_correctly.classList.add('hide');


                form_consultation.classList.remove('hide');
                form_consultation.classList.add('flex');
                form_popup.classList.remove('block');
                form_popup.classList.add('hide');
            }, 3000);
        } else {
            const error_correctly = document.querySelector('#error_correctly');

            error_correctly.classList.remove('hide');
            error_correctly.classList.add('inline');
        }

    });
}
sendForm();

const showMenuBurger = () => {
    const popup_burger = document.querySelector('#popup-burger');

    if (popup_burger.classList.contains('hide')) {
        popup_burger.classList.remove('hide');
        popup_burger.classList.add('show');

    } else if (popup_burger.classList.contains('show')) {
        popup_burger.classList.remove('show');
        popup_burger.classList.add('hide');
    }
}
const promptInput = () => {
    const form_span = document.querySelectorAll('.form_inputs span');
    const form_inputs = document.querySelectorAll('.form_inputs input');

    form_inputs.forEach((input) => {
        input.addEventListener('focus', () => {
            form_span.forEach((span) => {
                if (span.innerHTML === input.value) {
                    span.classList.remove('hide');
                    span.classList.add('inline');
                    input.value = '';
                }
            })
        })
    })
};
promptInput();

document.querySelector('#input_name').addEventListener('blur', (event) => {
    if (event.target.value === '') {
        const error_correctly = document.querySelector('#error_correctly');
        const error_input_name = document.querySelector('#error_input-name');

        error_correctly.classList.remove('hide');
        error_correctly.classList.add('inline');
        error_input_name.classList.remove('hide');
        error_input_name.classList.add('inline');

        document.querySelectorAll('#form_inputs__name span').forEach((span) => {
            span.style.color = '#FF625B';
            event.target.style.borderColor = '#FF625B';
        })
    }
});

document.querySelector('#input_phone').addEventListener('blur', (event) => {
    if (event.target.value === '') {

        const error_correctly = document.querySelector('#error_correctly');
        const error_input_phone = document.querySelector('#error_input-phone');

        error_correctly.classList.remove('hide');
        error_correctly.classList.add('inline');
        error_input_phone.classList.remove('hide');
        error_input_phone.classList.add('inline');

        document.querySelectorAll('#form_inputs__phone span').forEach((span) => {
            span.style.color = '#FF625B';
            event.target.style.borderColor = '#FF625B';
        })
    }
});

document.querySelector('#input_email').addEventListener('blur', (event) => {
    if (event.target.value === '') {

        const error_input_email = document.querySelector('#error_input-email');
        const error_correctly = document.querySelector('#error_correctly');

        error_correctly.classList.remove('hide');
        error_correctly.classList.add('inline');
        error_input_email.classList.remove('hide');
        error_input_email.classList.add('inline');

        document.querySelectorAll('#form_inputs__email span').forEach((span) => {
            span.style.color = '#FF625B';
            event.target.style.borderColor = '#FF625B';
        })
    }
});

const validInputNameForm = () => {
    const form_input_name = document.querySelector('#form_inputs__name');
    form_input_name.addEventListener('input', (e) => {

        const target = event.target;

        document.querySelectorAll('#form_inputs__name span').forEach((span) => {
            if (target.name === 'username' &&
                target.value !== '' && span.innerHTML === 'Имя' && target.value.match(/^[a-zA-Z_ ]+$/)) {

                target.style.borderColor = '#29C23E';
                target.style.color = '#29C23E';
                span.style.color = '#29C23E';

                const error_input_name = document.querySelector('#error_input-name');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('inline');
                error_correctly.classList.add('hide');
                error_input_name.classList.remove('inline');
                error_input_name.classList.add('hide');

            } else if (target.value === '' || !target.value.match(/^[a-zA-Z_ ]+$/)) {

                const error_input_name = document.querySelector('#error_input-name');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('hide');
                error_correctly.classList.add('inline');
                error_input_name.classList.remove('hide');
                error_input_name.classList.add('inline');

                target.style.borderColor = '#FF625B';
                target.style.color = '#FF625B';
                span.style.color = '#FF625B';
            }
        })
    });
}
validInputNameForm();

const validInputPhoneForm = () => {
    const form_input_phone = document.querySelector('#form_inputs__phone');
    form_input_phone.addEventListener('input', (e) => {
        const target = event.target;
        document.querySelectorAll('#form_inputs__phone span').forEach((span) => {

            if (target.name === 'phone' &&
                target.value !== '' && span.innerHTML === 'Телефон' && target.value.match(/^\d+$/)) {

                target.style.borderColor = '#29C23E';
                target.style.color = '#29C23E';
                span.style.color = '#29C23E';

                const error_input_phone = document.querySelector('#error_input-phone');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('inline');
                error_correctly.classList.add('hide');
                error_input_phone.classList.remove('inline');
                error_input_phone.classList.add('hide');

            } else if (target.value === '' || !target.value.match(/^\d+$/)) {

                const error_input_phone = document.querySelector('#error_input-phone');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('hide');
                error_correctly.classList.add('inline');
                error_input_phone.classList.remove('hide');
                error_input_phone.classList.add('inline');

                target.style.borderColor = '#FF625B';
                target.style.color = '#FF625B';
                span.style.color = '#FF625B';
            }
        })
    });
}
validInputPhoneForm();

const validInputEmailForm = () => {
    const form_input_email = document.querySelector('#form_inputs__email');
    form_input_email.addEventListener('input', (e) => {

        const valid = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
        const target = event.target;

        document.querySelectorAll('#form_inputs__email span').forEach((span) => {

            if (target.name === 'email' && target.value !== '' &&
                span.innerHTML === 'Email' && target.value.match(valid)) {

                target.style.borderColor = '#29C23E';
                target.style.color = '#29C23E';
                span.style.color = '#29C23E';

                const error_input_email = document.querySelector('#error_input-email');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('inline');
                error_correctly.classList.add('hide');
                error_input_email.classList.remove('inline');
                error_input_email.classList.add('hide');

            } else if (target.value === '' || !target.value.match(valid)) {

                const error_input_email = document.querySelector('#error_input-email');
                const error_correctly = document.querySelector('#error_correctly');

                error_correctly.classList.remove('hide');
                error_correctly.classList.add('inline');
                error_input_email.classList.remove('hide');
                error_input_email.classList.add('inline');

                target.style.borderColor = '#FF625B';
                target.style.color = '#FF625B';
                span.style.color = '#FF625B';
            }
        })
    });
}
validInputEmailForm();
