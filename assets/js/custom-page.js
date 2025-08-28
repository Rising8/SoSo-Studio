document.addEventListener('DOMContentLoaded', () => {
    // Initialize the fabric.js canvas 
    const canvas = new fabric.Canvas('custom-canvas', {
        backgroundColor: '#f9f9f9',
        width: 800,
        height: 400
    });

    function changeCanvasShape(shape) {
        const maxW = canvas.width * 0.9;
        const maxH = canvas.height * 0.9;
        const size = Math.min(maxW, maxH);

        const centerX = canvas.width / 2;
        const centerY = canvas.height / 2;

        let clip;

    switch (shape) {
        case 'rectangle':
            clip = new fabric.Rect({
                width: maxW,
                height: maxH,
                originX: 'center',
                originY: 'center',
                left: centerX,
                top: centerY,
                absolutePositioned: true
            });
            break;

        case 'circle':
            clip = new fabric.Circle({
                radius: size / 2,
                originX: 'center',
                originY: 'center',
                left: centerX,
                top: centerY,
                absolutePositioned: true
            });
            break;

        case 'oval':
            clip = new fabric.Ellipse({
                rx: maxW / 2,
                ry: maxH / 2,
                originX: 'center',
                originY: 'center',
                left: centerX,
                top: centerY,
                absolutePositioned: true
            });
            break;

        case 'triangle':
            clip = new fabric.Triangle({
                width: size,
                height: size,
                originX: 'center',
                originY: 'center',
                left: centerX,
                top: centerY,
                absolutePositioned: true
            });
            break;

        case 'pentagon':
            clip = new fabric.Polygon([
                {x:0, y:-1}, {x:0.95, y:-0.3}, {x:0.6, y:1},
                {x:-0.6, y:1}, {x:-0.95, y:-0.3}
            ].map(p => ({
                x: centerX + p.x * size/2,
                y: centerY + p.y * size/2
            })), { absolutePositioned: true });
            break;

        case 'hexagon':
            clip = new fabric.Polygon([
                {x:0, y:-1}, {x:0.87, y:-0.5}, {x:0.87, y:0.5},
                {x:0, y:1}, {x:-0.87, y:0.5}, {x:-0.87, y:-0.5}
            ].map(p => ({
                x: centerX + p.x * size/2,
                y: centerY + p.y * size/2
            })), { absolutePositioned: true });
            break;

        case 'star':
            clip = new fabric.Polygon([
                {x:0, y:-1}, {x:0.2, y:-0.3}, {x:0.95, y:-0.3},
                {x:0.35, y:0.1}, {x:0.6, y:1}, {x:0, y:0.4},
                {x:-0.6, y:1}, {x:-0.35, y:0.1}, {x:-0.95, y:-0.3}, {x:-0.2, y:-0.3}
            ].map(p => ({
                x: centerX + p.x * size/2,
                y: centerY + p.y * size/2
            })), { absolutePositioned: true });
            break;

        case 'trapezoid':
            clip = new fabric.Polygon([
                {x:-0.6, y:-1}, {x:0.6, y:-1}, {x:1, y:1}, {x:-1, y:1}
            ].map(p => ({
                x: centerX + p.x * maxW/2,
                y: centerY + p.y * maxH/2
            })), { absolutePositioned: true });
            break;

        case 'diamond':
            clip = new fabric.Polygon([
                {x:0, y:-1}, {x:1, y:0}, {x:0, y:1}, {x:-1, y:0}
            ].map(p => ({
                x: centerX + p.x * size/2,
                y: centerY + p.y * size/2
            })), { absolutePositioned: true });
            break;
    }


        if (clip) {
            canvas.clipPath = clip; 
            canvas.renderAll();
        }
    }

    // Shape buttons
    document.querySelectorAll('.shape-option').forEach(button => {
        button.addEventListener('click', () => {
            const shape = button.getAttribute('data-shape');
            changeCanvasShape(shape);
        });
    });


    // Image upload input
    const uploadInput = document.querySelector('#upload-file');

    // Text inputs
    const textTab = document.querySelector('#tool-text');
    const textInput = textTab.querySelector('input[type="text"]');
    const fontSizeInput = textTab.querySelector('input[type="number"]');
    const colorInput = textTab.querySelector('input[type="color"]');

    // Shapes color picker
    const shapeColorInput = document.getElementById('shape-color');

    // Brush / Drawing inputs
    const drawBtn = document.getElementById('toggle-draw');
    const brushColorInput = document.getElementById('brush-color');
    const brushSizeInput = document.getElementById('brush-size');

    // Background color input
    const colorTab = document.querySelector('#tool-color');
    const bgColorInput = colorTab.querySelector('input[type="color"]');
    
    // Turn off draw mode automatically when switching between tool tabs
    const tabLinks = document.querySelectorAll('#custom-tools-tab .nav-link');

    // Undo and/or Redo
    // Undo and redo stacks to track canvas states
    let undoStack = [];
    let redoStack = [];
    const maxHistory = 50; // Prevent overload by limiting history

    // Saves the current canvas state
    function saveState(clearRedo = true) {
        // Deep copy of the canvas JSON and pushes to the undo stack
        undoStack.push(JSON.parse(JSON.stringify(canvas.toJSON())));
        // Keep undo stack within the max history
        if (undoStack.length > maxHistory) undoStack.shift();
        if (clearRedo) redoStack = [];
    }

    // Initialize canvas state
    saveState(false);

        // Undo function
        function undo() {
            if (undoStack.length > 1) {
                // Remove the latest stack from undo stack
                const currentState = undoStack.pop();
                // Push it to the redo stack for a possible redo
                redoStack.push(currentState);
                // Gets the new current (which is the previous) state
                const prevState = undoStack[undoStack.length - 1];
                // Loads previous state and re-render the canvas
                canvas.loadFromJSON(prevState, () => canvas.renderAll());
            } else {
                alert("Nothing to undo");
            }
        }

        // Redo function
        function redo() {
            if (redoStack.length > 0) {
                // Takes the most recent state from the redo stack
                const nextState = redoStack.pop();
                // Push it back to the undo stack
                undoStack.push(nextState);
                // Loads the state and re-render the canvas
                canvas.loadFromJSON(nextState, () => canvas.renderAll());
            } else {
                alert("Nothing to redo");
            }
        }

    // Hook undo/redo butons
    document.getElementById('undo-btn').addEventListener('click', undo);
    document.getElementById('redo-btn').addEventListener('click', redo);

    // Upload image functionality
    // Image upload
    uploadInput.addEventListener('change', (e) => {
        const files = Array.from(e.target.files);

        files.forEach(file => {
            // Create file reader to read the image file
            const reader = new FileReader();
            reader.onload = (event) => {
                // Create a fabric.js image from the file's data URL
                fabric.Image.fromURL(event.target.result, img => {
                    // Defines how the image will look like when it prints to the canvas
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
                    saveState();
                });
            };
            // Triggers reading the file as a data URL
            reader.readAsDataURL(file);
        });
        // Resets the input so that the same image can be uploaded again
        uploadInput.value = ''; 
    });

    // Add text functionality
    textInput.addEventListener('change', () => {
        // Removes any whitespace
        const text = textInput.value.trim();
        // Ignores empty input
        if (!text) return;

        // Creates a fabric.js text object
        const fabricText = new fabric.Text(text, {
            // Defines how the text will look when it prints to the canvas
            left: canvas.width / 2,
            top: canvas.height / 2,
            fill: colorInput.value,
            fontSize: parseInt(fontSizeInput.value, 10),
            originX: 'center',
            originY: 'center'
        });

        // Adds text to canvas
        canvas.add(fabricText);
        // Selects the newly added text so that the user can interact with it
        canvas.setActiveObject(fabricText);
        // Clears the input field
        textInput.value = '';
        // Saves the state for a possible redo/undo
        saveState();
    });

    // Add shapes functionality
    // Adds a rectangle
    document.getElementById('add-rect').addEventListener('click', () => {
        const rect = new fabric.Rect({
            // Defines how the rectangle will look when it prints to the canvas
            left: 100,
            top: 100,
            fill: shapeColorInput.value, // use color picker
            width: 100,
            height: 60
        });
        // Adds the rectangle
        canvas.add(rect);
        // Makes it the selected object
        canvas.setActiveObject(rect);
        // Saves the state for possible redo/undo
        saveState();
    });

    // Adds a circle
    document.getElementById('add-circle').addEventListener('click', () => {
        const circle = new fabric.Circle({
            // Defines how the circle will look when it prints to the canvas
            left: 150,
            top: 150,
            fill: shapeColorInput.value, // use color picker
            radius: 50
        });
        // Adds the circle
        canvas.add(circle);
        // Makes it the selected object
        canvas.setActiveObject(circle);
        // Saves the state for possible redo/undo
        saveState();
    });

    // Adds a triangle
    document.getElementById('add-triangle').addEventListener('click', () => {
        const triangle = new fabric.Triangle({
            // Defines how the triangle will look when it prints to the canvas
            left: 200,
            top: 200,
            fill: shapeColorInput.value, // use color picker
            width: 100,
            height: 100
        });
        // Adds the triangle
        canvas.add(triangle);
        // Makes it the selected object
        canvas.setActiveObject(triangle);
        // Saves the state for possible redo/undo
        saveState();
    });

    // Drawing mode functionality
    // Ensure a brush exists before drawing
    function ensureBrush() {
        if (!canvas.freeDrawingBrush) {
            canvas.freeDrawingBrush = new fabric.PencilBrush(canvas);
        }
    }

    // Toggle drawing mode on or off when clicked
    drawBtn.addEventListener('click', () => {
        // Switch between draw and not drawing mode
        canvas.isDrawingMode = !canvas.isDrawingMode;
        // drawBtn.textContent = canvas.isDrawingMode ? "Disable Draw Mode" : "Enable Draw Mode";

        if (canvas.isDrawingMode) {
            ensureBrush();
            canvas.freeDrawingBrush.color = brushColorInput.value; // Sets the brush colour
            canvas.freeDrawingBrush.width = parseInt(brushSizeInput.value, 10); // Sets the brush size
        }
    });

    // Update brush color dynamically
    brushColorInput.addEventListener('change', () => {
        ensureBrush();
        canvas.freeDrawingBrush.color = brushColorInput.value;
    });

    // Update brush size dynamically when the user changes the input
    brushSizeInput.addEventListener('change', () => {
        ensureBrush();
        canvas.freeDrawingBrush.width = parseInt(brushSizeInput.value, 10);
    });

    // Turn off drawing mode automatically when switching between tool tabs
    tabLinks.forEach(tab => {
        tab.addEventListener('shown.bs.tab', () => {
            if (canvas.isDrawingMode) {
                canvas.isDrawingMode = false;
                drawBtn.textContent = "Enable Draw Mode";
            }
        });
    });

    // Save strokes to undo stack whenever a new path is drawn
    canvas.on('path:created', () => saveState(false));

    // Changes canvas background colour functionality
    bgColorInput.addEventListener('change', () => {
        canvas.setBackgroundColor(bgColorInput.value, () => {
            // Re-render canvas with new background colour
            canvas.renderAll();
            // Saves state for possible redo/undo
            saveState();
        });
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
});
