var camera;
var cameraLookAt;
var cameraPos;
var cameraOffsetZ = 7;
var render;
var scene;
var light;
var lx = 0;
var ly = 0;
var lz = 0;
var testCube;
var animationId;
var stepNo = 6;
var rotationSpeed = 0.0004;
var fps = 60;
var w = 0;
var h = 0;
var canvas;

$(document).ready(function()
{
	window.requestAnimationFrame = (function() {
		return window.requestAnimationFrame;
	})();
	
	var content = $('#content');

	w = window.innerWidth - 32;
	h = window.innerHeight - 200;

	function initCanvas()
	{
		content.append($(`<div id="canvas" width="${w}" height="${h}"></div>`));
		canvas = document.getElementById('canvas');

		render = new THREE.WebGLRenderer({alpha:true});
		render.setClearColor(0x000000, 0);
		render.setSize(w, h);

		canvas.appendChild(render.domElement);
		$('canvas').css('border', '1px solid #ccc');
	}

	function startScene(step)
	{
		scene = new THREE.Scene();
		var aspect = w / h;

		camera = new THREE.PerspectiveCamera(45, aspect);
		scene.add(camera);
		
		light = new THREE.HemisphereLight(0xffffff, 0x000000, 1);
		scene.add(light);

		createCubesFromDim(step);

		renderScene();
	}

	function createCubesFromDim(step)
	{
		var dim = steps[step];
		lz = dim.length;
		for(var z = 0; z < lz; z++)
		{
			ly = dim[z].length;
			for(var y = 0; y < ly; y++)
			{
				lx = dim[z][y].length;
				for(var x = 0; x < lx; x++)
				{
					if(dim[z][y][x])
					{
						scene.add(createCube(x,-y,z));
					}
				}	
			}	
		}

		cameraPos = new THREE.Vector3((lx-1)/2,0, lx + cameraOffsetZ);
		camera.position.copy(cameraPos);

		cameraLookAt = {x: (lx-1)/2, y : (-ly+1)/2, z: (lz-1) / 2};
		camera.lookAt(cameraLookAt);

		testCube = createCube((lx-1)/2, (-ly+1)/2, (lz-1) / 2, 0xcc3333);
		scene.add(testCube);
	}

	function createCube(x,y,z,color) 
	{

		var color = color || 0x33cc33;
		
		var cubeMaterials = [

			new THREE.MeshLambertMaterial({color:color}),
            new THREE.MeshLambertMaterial({color:color}),
            new THREE.MeshLambertMaterial({color:color}),
            new THREE.MeshLambertMaterial({color:color}),
            new THREE.MeshLambertMaterial({color:color}),
			new THREE.MeshLambertMaterial({color:color})
        ];

		var cubeSize = 0.8;
		var cubeMaterial = new THREE.MeshFaceMaterial(cubeMaterials);
		var cubeGeometry = new THREE.BoxGeometry(cubeSize,cubeSize,cubeSize);

		cube = new THREE.Mesh(cubeGeometry, cubeMaterial);
		cube.position.set(x,y,z);

		return cube;
	}

	function animateScene() 
	{
		setTimeout( function() {animationId = requestAnimationFrame(animateScene);}, 1000 / fps );

		var speed = Date.now() * rotationSpeed;
		camera.position.x = Math.cos(speed) * cameraPos.z + cameraLookAt.x;
		camera.position.z = Math.sin(speed) * cameraPos.z + cameraLookAt.z;

		camera.lookAt(cameraLookAt);
		
		renderScene();
	}

	function stop()
	{
		if(animationId)
		{
			cancelAnimationFrame(animationId);
			animationId = undefined;
			render.dispose();
			render = undefined;
			scene = undefined;
			camera = undefined;
			light = undefined;

			$('#canvas').remove();
		}
	}

	function renderScene()
	{
		render.render(scene, camera);
	}

	function start(s)
	{
		stepNo += s;
		stepNo = stepNo < 0 ? 0 : stepNo;
		stepNo = stepNo > 6 ? 6 : stepNo;

		stop();

		$('#steptext').text(`Step ${stepNo}`);

		initCanvas();
		startScene(stepNo);
		animateScene();
	}

	function initGui()
	{
		var prevButton = $(`<button id="prev" class="btn btn-primary">&lt;&lt; Prev.</button>`);
		var stepText = $(`<span id="steptext" class="h4" style="margin: 0 10px; vertical-align: middle;">Step 0</span>`);
		var nextButton = $(`<button id="next" class="btn btn-primary">Next &gt;&gt;</button>`);

		prevButton.click(function(){ start(-1); });
		nextButton.click(function(){ start(+1); });

		$('#container').prepend($(nextButton));
		$('#container').prepend($(stepText));
		$('#container').prepend($(prevButton));
	}

	initGui();
	start(stepNo);
});