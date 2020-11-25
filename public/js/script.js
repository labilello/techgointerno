

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
