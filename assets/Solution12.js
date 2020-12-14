$(document).ready(function()
{
	var content = $('#content');
	/** @type {HTMLCanvasElement} */
	var canvas;
	/** @type {CanvasRenderingContext2D} */
	var ctx;

	content.removeClass('h3');
	
	initCanvas();
	draw();

	var i = 0;
	//var intervalHandle = setInterval(showAnimation, 250);

	function initCanvas()
	{
		canvas = document.createElement("canvas");
		content.append(canvas);
		$('canvas').css('border', '1px solid #333');
		ctx = canvas.getContext("2d");

		canvas.width = 801;
		canvas.height = 801;
	}

	function draw()
	{
		var x = 400;
		var y = 400;
		var xx = 400;
		var yy = 400;
		var f = 400/data.max;

		ctx.fillStyle = '#000000';
		ctx.fillRect(x-4, y-4, 8, 8);

		data.positions.forEach(pos => 
		{

		});

		//draw lines
		var l = data.positions.length;
		var i = 0;
		var intervalId = setInterval(function()
		{ 
			if(i == l)
			{
				ctx.fillStyle = '#000000';
				ctx.fillRect(xx-4, yy-4, 8, 8);

				clearInterval(intervalId);
				return;
			}

			ctx.beginPath();
			var hue = Math.ceil((i/l) * 360);
			ctx.strokeStyle = `hsl(${hue}, 100%, 50%)`;

			var pos = data.positions[i];
			ctx.moveTo(xx, yy);

			xx = x + Math.ceil(pos[0] * f);
			yy = y + Math.ceil(pos[1] * f);

			ctx.lineTo(xx, yy)
			ctx.stroke();

			i++;
		}, 20);

	}
});