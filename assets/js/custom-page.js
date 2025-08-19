document.addEventListener('DOMContentLoaded', () => {
    // Initialize the fabric.js canvas 
    const canvas = new fabric.Canvas('custom-canvas', {
        backgroundColor: '#f9f4fc',
        width: 800,
        height: 400
    });

    // Add text functionality
    const textTab = document.querySelector('#tool-text');
    const textInput = textTab.querySelector('input[type="text"]');
    const fontSizeInput = textTab.querySelector('input[type="number"]');
    const colorInput = textTab.querySelector('input[type="color"]');

    // When the user changes the text input, creates a new text object on the canvas
    textInput.addEventListener('change', () => {
        const text = textInput.value.trim();
        if (text) {
            const fabricText = new fabric.Text(text, {
                left: canvas.width / 2,
                top: canvas.height / 2,
                fill: colorInput.value,
                fontSize: parseInt(fontSizeInput.value, 10),
                originX: 'center',
                originY: 'center'
            });
            canvas.add(fabricText);
            canvas.setActiveObject(fabricText);
            textInput.value = '';
        }
    });

    // Upload image functionality
    const uploadInput = document.querySelector('#upload-file');
    uploadInput.addEventListener('change', (e) => {
        const files = Array.from(e.target.files);
        files.forEach(file => {
            // Reads the file as a data URL
            const reader = new FileReader();
            reader.onload = function(event) {
                fabric.Image.fromURL(event.target.result, (img) => {
                    img.scaleToWidth(150);
                    img.scaleToHeight(150);
                    img.set({
                        left: canvas.width / 2,
                        top: canvas.height / 2,
                        originX: 'center',
                        originY: 'center'
                    });
                    canvas.add(img);
                    canvas.setActiveObject(img);
                });
            }
            // Trigger file reader
            reader.readAsDataURL(file);
        });
        // Clears the file input so the same image can be uploaded again if needed
        uploadInput.value = '';
    });

    // Changes canvas background colour
    const colorTab = document.querySelector('#tool-color');
    const bgColorInput = colorTab.querySelector('input[type="color"]');
    bgColorInput.addEventListener('change', () => {
        // Changes canvas background
        canvas.setBackgroundColor(bgColorInput.value, canvas.renderAll.bind(canvas));
    });

    // Downloads canvas as an image
    const downloadBtn = document.getElementById('download-design');
    downloadBtn.addEventListener('click', () => {
        canvas.discardActiveObject();
        canvas.renderAll();

        // Converts canvas to PNG and triggers download
        canvas.lowerCanvasEl.toBlob((blob) => {
            const link = document.createElement('a');
            // File name
            link.download = 'my-design.png';
            // Blob URL
            link.href = URL.createObjectURL(blob);
            // Trigger download
            link.click();
        });
    });

    // Sends design to commission page -- needs to be updated later to get the design and send to the commission page and attach it in the commission form
    const sendBtn = document.getElementById('send-to-commission');
    sendBtn.addEventListener('click', () => {
        // redirect to commission page - commissionPageURL is defined in custom-page.php in the script
        window.location.href = commissionPageURL; 
    });

    // Delete the selected object
    const deleteBtn = document.getElementById('delete-object');
    deleteBtn.addEventListener('click', () => {
        // Gets the selected object
        const activeObject = canvas.getActiveObject();
        if (activeObject) {
            // Ask user for confirmation
            const confirmed = confirm("Are you sure you want to delete the selected object?");
            if (confirmed) {
                // Removes object from canvas
                canvas.remove(activeObject);
            }
        } else {
            // Notifies if nothing is selected
            alert("No object selected to delete.");
        }
    });

    // Reset the canvas
    const resetBtn = document.getElementById('reset-canvas');
    resetBtn.addEventListener('click', () => {
        // Ask user for confirmation
        const confirmed = confirm("Are you sure you want to reset the canvas? This will remove all objects.");
        if (confirmed) {
            // Removes all objects
            canvas.clear();
            // Resets background colour
            canvas.backgroundColor = '#f9f4fc';
            // Re-render canvas
            canvas.renderAll();
        }
    });
});
