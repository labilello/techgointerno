



let deferredPrompt;
const buttonInstall = document.querySelector("#buttonInstall");
const dropdown = document.querySelector("#dropdown-menu");

window.addEventListener('beforeinstallprompt', (e) => {
    // Prevent Chrome 67 and earlier from automatically showing the prompt
    e.preventDefault();
    // Stash the event so it can be triggered later.
    deferredPrompt = e;
    // Update UI to notify the user they can add to home screen
    buttonInstall.hidden = false;
    dropdown.attributes[dropdown.attributes.length - 1].value = "{'h-96 ': open, 'h-0': ! open}"

    buttonInstall.addEventListener('click', (e) => {
        // hide our user interface that shows our A2HS button
        // addBtn.style.display = 'none';
        // Show the prompt
        deferredPrompt.prompt();
        // Wait for the user to respond to the prompt
        deferredPrompt.userChoice.then((choiceResult) => {
            if (choiceResult.outcome === 'accepted') {
                console.log('User accepted the A2HS prompt');
                deferredPrompt = null;
            } else {
                console.log('User dismissed the A2HS prompt');
            }

        });
    });
});


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

