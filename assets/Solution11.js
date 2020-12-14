$(document).ready(function()
{
	var content = $('#content');
	/** @type {HTMLCanvasElement} */
	var canvas;
	/** @type {CanvasRenderingContext2D} */
	var ctx;
	var squareSize = 8;
	
	content.removeClass('h3');
	
	initCanvas();
	var intervalHandle = setInterval(draw, 300);

	var i = 0;

	function initCanvas()
	{
		canvas = document.createElement("canvas");
		content.append(canvas);
		$('canvas').css('border', '1px solid #333');
		ctx = canvas.getContext("2d");

		canvas.width = maps[0][0].length * squareSize;
		canvas.height = maps[0].length * squareSize;
	}

	function draw()
	{
		if(i == maps.length)
		{
			console.log("Seat simulation done!");
			clearInterval(intervalHandle);
			return;
		}

		var x = 0;
		var y = 0;
		for(var r = 0; r < maps[i].length; r++)
		{
			x = 0;
			for(var c = 0; c < maps[i][r].length; c++)
			{
				switch(maps[i][r][c])
				{
					case('#') : ctx.fillStyle = '#d44'; break;
					case('L') : ctx.fillStyle = '#4d4'; break;
					case('.') : ctx.fillStyle = '#333'; break;
				}

				ctx.fillRect(x, y, squareSize, squareSize);
				ctx.strokeRect(x, y, squareSize, squareSize);
				x += squareSize;
			}
			y += squareSize;
		}

		i++;
	}
});