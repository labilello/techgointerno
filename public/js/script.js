let deferredPrompt;
const buttonInstall = document.querySelector("#buttonInstall");


window.addEventListener('DOMContentLoaded', () => {
    buttonInstall.addEventListener('click', () => {
        const promptEvent = window.deferredPrompt;
        if (!promptEvent) {
            console.log('👍', 'NO PROMT');
            alert("Su navegador no es compatible para realizar la instalaciòn. Reintente con Chrome o Safari")
            // The deferred prompt isn't available.
            return;
        }
        // Show the install prompt.
        promptEvent.prompt();
        // Log the result
        promptEvent.userChoice.then((result) => {
            console.log('👍', 'userChoice', result);
            // Reset the deferred prompt variable, since
            // prompt() can only be called once.
            window.deferredPrompt = null;
            // Hide the install button.
            buttonInstall.classList.toggle('hidden', true);
        });
    });



    // let displayMode = 'browser tab';
    // if (navigator.standalone) {
    //     displayMode = 'standalone-ios';
    // }
    // if (window.matchMedia('(display-mode: standalone)').matches) {
    //     displayMode = 'standalone';
    // }
    // // Log launch display mode to analytics
    // console.log('DISPLAY_MODE_LAUNCH:', displayMode);
});


// window.addEventListener('beforeinstallprompt', (e) => {
//     // Prevent the mini-infobar from appearing on mobile
//     e.preventDefault();
//     // Stash the event so it can be triggered later.
//     deferredPrompt = e;
//     // Update UI notify the user they can install the PWA
//     showInstallPromotion();
// });
//
// buttonInstall.addEventListener('click', (e) => {
//     // Hide the app provided install promotion
//     hideMyInstallPromotion();
//     // Show the install prompt
//     deferredPrompt.prompt();
//     // Wait for the user to respond to the prompt
//     deferredPrompt.userChoice.then((choiceResult) => {
//         if (choiceResult.outcome === 'accepted') {
//             console.log('User accepted the install prompt');
//         } else {
//             console.log('User dismissed the install prompt');
//         }
//     });
// });
//
// function showInstallPromotion() {
//     buttonInstall.classList.toggle('hidden', false);
// }
//
// function hideMyInstallPromotion() {
//     buttonInstall.classList.toggle('hidden', true);
//     console.log('Navegador NO compatible'
// }

function handler() {
    return {
        fields: [],
        addOldFields(data) {
            console.log(data);
            // this.fields.push({
            //     deviceType: device.deviceType,
            //     inWarranty: device.inWarranty,
            //     outWarranty: device.outWarranty,
            //     origin: device.origin
            // });
        },
        addNewField() {
            this.fields.push({
                // deviceType: '',
                // inWarranty: '',
                // outWarranty: '',
                // origin: ''
            });
            console.dir(this.fields);
        },
        removeField(index) {
            this.fields.splice(index, 1);
        }
        // removeRow(index) {
        //     document.querySelector('#'.index)
        // }
    }
}

