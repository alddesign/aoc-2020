<?php
declare(strict_types = 1);
namespace Alddesign\EzMvc\Solutions;

use Alddesign\EzMvc\System\Helper;
use Exception;

class Solution2001 extends Solution
{
	public $ready = true;

	private const INPUT =
	[
		'Tile 3187:',
		'.........#',
		'....##...#',
		'##..#.#..#',
		'#.##....##',
		'..#.##...#',
		'##.#..#.#.',
		'#.##.....#',
		'####......',
		'...#..#..#',
		'.##..##.#.',
		'Tile 1223:',
		'###.#..###',
		'#......#.#',
		'........##',
		'..#.....##',
		'##.......#',
		'#........#',
		'#..#.#...#',
		'..#.##....',
		'####.....#',
		'.##..##..#',
		'Tile 1913:',
		'..#.......',
		'##........',
		'##.#.#..##',
		'#..#......',
		'###.#....#',
		'.....##.#.',
		'.......###',
		'.##......#',
		'#.....##..',
		'#.#.#.###.',
		'Tile 1301:',
		'#...#..#.#',
		'#..#...#..',
		'#........#',
		'.#..#....#',
		'.#.#.##.#.',
		'#....##.##',
		'#...#....#',
		'#.##....##',
		'.###....#.',
		'.#.#####..',
		'Tile 3943:',
		'..#.#.#..#',
		'.#..#....#',
		'#.....###.',
		'#..#...#..',
		'....#.##.#',
		'.#........',
		'#..#...#.#',
		'#..#.#..##',
		'....#...#.',
		'#.####....',
		'Tile 3023:',
		'#..#....##',
		'##..#.##.#',
		'#.##.#...#',
		'....##...#',
		'.##..##..#',
		'......#...',
		'##......##',
		'#..#..#...',
		'##.#.....#',
		'.#..#....#',
		'Tile 3299:',
		'#...#....#',
		'.####.#..#',
		'.........#',
		'.#.....#..',
		'#...#.##.#',
		'..#.#..#.#',
		'##.##....#',
		'#..#.#...#',
		'##........',
		'.#.#.#.###',
		'Tile 3677:',
		'..#.#..#.#',
		'#.#..#...#',
		'#..#.#...#',
		'#...#.##..',
		'#..#......',
		'#.#..#....',
		'#...#..#..',
		'#....##..#',
		'..#..#.#..',
		'#.####.#..',
		'Tile 2803:',
		'.#.#..####',
		'#.#.#....#',
		'#.......##',
		'..#..##.##',
		'#...#.....',
		'##.#.....#',
		'..#..#..##',
		'...#.#.#..',
		'#...#.###.',
		'####.##.##',
		'Tile 3343:',
		'###.##..##',
		'...#.#...#',
		'#....#..#.',
		'#...#....#',
		'..#.#.....',
		'.######.##',
		'#.###.####',
		'..##...##.',
		'#.##......',
		'...#..#.#.',
		'Tile 1987:',
		'.......##.',
		'.#.....#..',
		'#....###..',
		'###.##....',
		'.#...#...#',
		'#.#..###.#',
		'......#..#',
		'...##.....',
		'...##....#',
		'#...#####.',
		'Tile 1609:',
		'...#.##.##',
		'......#...',
		'..#..#.#.#',
		'...##.....',
		'###.####.#',
		'#......###',
		'#.....##..',
		'.##.#..#..',
		'.##...#...',
		'#.###...##',
		'Tile 2221:',
		'###.######',
		'.##......#',
		'##...#...#',
		'..........',
		'....#.#..#',
		'#..#.....#',
		'##..##...#',
		'##..##....',
		'.#.....#..',
		'..########',
		'Tile 2297:',
		'.###..##.#',
		'#..###....',
		'..#..#..##',
		'....######',
		'##.......#',
		'.......#.#',
		'#.....#..#',
		'###....#.#',
		'#....##..#',
		'....##.#..',
		'Tile 2269:',
		'##.....#..',
		'.###..###.',
		'#..##.....',
		'....#.....',
		'#..#...#.#',
		'#....#..#.',
		'#...###.##',
		'.........#',
		'....#.....',
		'##.....#.#',
		'Tile 2287:',
		'#########.',
		'##...#.###',
		'#..#.#....',
		'..##..####',
		'....#.....',
		'#....#.#.#',
		'......#..#',
		'#......#..',
		'##..##....',
		'##.......#',
		'Tile 2399:',
		'#.#.#..###',
		'....#.....',
		'#....##..#',
		'##..#....#',
		'#.#.#.....',
		'.#...#..#.',
		'#.#...#..#',
		'.....##..#',
		'#...##...#',
		'#..##.##.#',
		'Tile 1423:',
		'##...#.#..',
		'#.#...#.#.',
		'.###..#..#',
		'.........#',
		'#...#...#.',
		'#....##.##',
		'#......#..',
		'##..##...#',
		'.#......##',
		'...#.###.#',
		'Tile 2621:',
		'###.....#.',
		'..#....#..',
		'......#...',
		'##.......#',
		'.#.#..##..',
		'#.#.##...#',
		'#...#..#.#',
		'#..###.#.#',
		'###.......',
		'..#.......',
		'Tile 2003:',
		'..#..#####',
		'#.#.....#.',
		'#..#.#...#',
		'.#....#...',
		'#.#.##.##.',
		'##.#..##.#',
		'.####..#.#',
		'#.#...#..#',
		'..####.#.#',
		'..#..###.#',
		'Tile 3889:',
		'.#.##.#.##',
		'.........#',
		'######..##',
		'...#...#..',
		'#.....#..#',
		'....#....#',
		'#........#',
		'...#.#.#.#',
		'#..##..#..',
		'..##..#...',
		'Tile 1667:',
		'#...####.#',
		'#######..#',
		'#.........',
		'........##',
		'.....##...',
		'#...###..#',
		'...#.....#',
		'#..#....#.',
		'.#.#.##..#',
		'..#.###.#.',
		'Tile 1877:',
		'...#......',
		'.#.#.#..#.',
		'.....##..#',
		'..........',
		'...#.#....',
		'#.##....##',
		'#.#..##...',
		'#..##..#..',
		'#.........',
		'##..#...##',
		'Tile 2657:',
		'#.#..####.',
		'.....#...#',
		'........#.',
		'#.#......#',
		'#..##.....',
		'#........#',
		'...##.#...',
		'#....#.#..',
		'.......#.#',
		'########..',
		'Tile 1669:',
		'.###.####.',
		'......###.',
		'.#.##...##',
		'..##...#..',
		'##......##',
		'.#........',
		'###..#.###',
		'.##...#.#.',
		'....###.##',
		'.####....#',
		'Tile 2843:',
		'#...#.#.##',
		'.#.....#..',
		'##.#....##',
		'##.#..####',
		'##........',
		'..#.....##',
		'.#.#......',
		'##..#.#...',
		'.#.#.....#',
		'.#.#....##',
		'Tile 2243:',
		'..#....##.',
		'.#.......#',
		'......#..#',
		'##......#.',
		'#.##.....#',
		'........#.',
		'#..#.#...#',
		'##..#..#..',
		'...#...#.#',
		'....####.#',
		'Tile 1543:',
		'..#..##...',
		'..##..##.#',
		'...#......',
		'#.......##',
		'......#.##',
		'.#...#....',
		'#.##....##',
		'##..##.#.#',
		'#.###....#',
		'######.#.#',
		'Tile 1777:',
		'##.##..###',
		'#.#...##..',
		'........##',
		'##.#......',
		'.#....##..',
		'#........#',
		'......#...',
		'#.........',
		'.........#',
		'#..###....',
		'Tile 2161:',
		'########.#',
		'....#.....',
		'####.#....',
		'#.####....',
		'..###..#..',
		'.#..#....#',
		'...#####..',
		'#....#....',
		'......#..#',
		'######.#.#',
		'Tile 3167:',
		'.#.....##.',
		'#..#.....#',
		'...###..##',
		'#.#.......',
		'#.###.....',
		'.#......#.',
		'.##.##.#.#',
		'.#.#..##..',
		'..#...#.##',
		'##.#..#.#.',
		'Tile 1279:',
		'#.....#..#',
		'#...###.#.',
		'##..###.#.',
		'..#....#.#',
		'#..#......',
		'.#.....#.#',
		'....#...#.',
		'#.......#.',
		'#.........',
		'....###.##',
		'Tile 2711:',
		'##.###..##',
		'.......###',
		'#...#..###',
		'#.........',
		'#####.#...',
		'#..#.###..',
		'......#...',
		'##.......#',
		'....#....#',
		'..####..#.',
		'Tile 1087:',
		'...#.##...',
		'#....#..##',
		'.....##.##',
		'.#...#...#',
		'.##..#..##',
		'#...#....#',
		'..#.......',
		'##........',
		'#.#.###...',
		'##.##..###',
		'Tile 3947:',
		'.##...###.',
		'##......#.',
		'.#........',
		'........##',
		'........##',
		'#..###...#',
		'##.......#',
		'#....##..#',
		'#........#',
		'#.##..#..#',
		'Tile 1571:',
		'#######..#',
		'..#.#...#.',
		'.........#',
		'..#......#',
		'.........#',
		'#.......##',
		'...#..##.#',
		'.#..#.....',
		'#..#.#....',
		'#.#....###',
		'Tile 2521:',
		'..#.#.####',
		'#........#',
		'..........',
		'..#...#...',
		'....##...#',
		'...#...#..',
		'#.#.#...##',
		'#.........',
		'.#...#.##.',
		'##.#####.#',
		'Tile 3533:',
		'...#.#.#.#',
		'..#.......',
		'.........#',
		'...#......',
		'##..#.#...',
		'...#..#.##',
		'.#...#.#.#',
		'..#..###.#',
		'###...#.##',
		'#.#.......',
		'Tile 2339:',
		'#.#####...',
		'..##......',
		'#...##...#',
		'#.#.#.....',
		'#......##.',
		'#...#...#.',
		'......#.##',
		'....##..##',
		'..#.#..###',
		'##..##...#',
		'Tile 1493:',
		'###..####.',
		'..##.....#',
		'.........#',
		'..#.#...##',
		'..#......#',
		'..##....##',
		'.#..##.##.',
		'.........#',
		'##.#.#...#',
		'#.#..#.#.#',
		'Tile 1637:',
		'###.##.#.#',
		'.....#....',
		'#....##..#',
		'#.....#...',
		'..###.##..',
		'#.#.......',
		'##.#...##.',
		'....#....#',
		'#...#.##..',
		'..#..####.',
		'Tile 2153:',
		'.#.##.#...',
		'.....#...#',
		'......#...',
		'...#.#...#',
		'#.#..##...',
		'...#..#...',
		'#.##.#..#.',
		'.#.....#..',
		'.......#.#',
		'###...#.#.',
		'Tile 1129:',
		'..#.###...',
		'#.####..##',
		'#......#..',
		'###.......',
		'##......#.',
		'#.#..#..##',
		'#..##...##',
		'.#......#.',
		'.#........',
		'#######..#',
		'Tile 3581:',
		'#...##.##.',
		'#####..#..',
		'#.##.#####',
		'.....#....',
		'#.........',
		'.....#...#',
		'.#........',
		'#........#',
		'##...#.#.#',
		'..##..#...',
		'Tile 1303:',
		'####.##...',
		'#...##....',
		'#.##......',
		'#.....#...',
		'#....##...',
		'####.#.###',
		'#.#.#.#..#',
		'#..#....##',
		'#.#....#..',
		'.#.##.....',
		'Tile 3209:',
		'##..##.###',
		'...#.##...',
		'##..##.#.#',
		'..#.....#.',
		'#.###...##',
		'##.#.#....',
		'###......#',
		'....##....',
		'#........#',
		'.###.#..#.',
		'Tile 3613:',
		'##..####..',
		'.#...#...#',
		'#.##......',
		'...#......',
		'#.....#.#.',
		'##.#.##...',
		'......#.##',
		'#.........',
		'#.#...#...',
		'###.#.....',
		'Tile 3833:',
		'......###.',
		'#.#......#',
		'#..#......',
		'.#.#..#...',
		'#.#.#....#',
		'.....#....',
		'#.....#...',
		'.........#',
		'##....###.',
		'....#..##.',
		'Tile 2089:',
		'.#..###.##',
		'##.##...#.',
		'##..##..##',
		'.#.#..#...',
		'.#....#...',
		'##.....#.#',
		'...#.....#',
		'.#..#....#',
		'##..##...#',
		'##..#.#.##',
		'Tile 1553:',
		'..#.##....',
		'#..##...#.',
		'#.#..#...#',
		'.##..#...#',
		'##..###...',
		'##.#.#....',
		'#..#.#.###',
		'.........#',
		'......#..#',
		'#.#.#....#',
		'Tile 2213:',
		'#####....#',
		'..###..#..',
		'...#......',
		'.........#',
		'.#.###....',
		'#.........',
		'.....##.##',
		'###......#',
		'#...#####.',
		'.##.##..##',
		'Tile 3347:',
		'..#..#####',
		'#.##...#..',
		'##.#..####',
		'...###..#.',
		'#.##......',
		'.#.##..#..',
		'#.##.#..#.',
		'###...##..',
		'#.#..#.#.#',
		'#.#...##..',
		'Tile 3203:',
		'#.####.#.#',
		'#......#.#',
		'#..#...#.#',
		'.#........',
		'#......#..',
		'#.###...#.',
		'........##',
		'..##...#.#',
		'..........',
		'#...#..##.',
		'Tile 1811:',
		'.##.####.#',
		'.#......##',
		'.......#.#',
		'#...##.##.',
		'#.......#.',
		'#.#.#.####',
		'.#.......#',
		'....#...#.',
		'......###.',
		'#...#..###',
		'Tile 1531:',
		'##...#.#.#',
		'.##......#',
		'#........#',
		'#...#.....',
		'#...###..#',
		'...#.#....',
		'#.......#.',
		'.#..###.#.',
		'.....####.',
		'##.#.####.',
		'Tile 3191:',
		'##..###.##',
		'#.###...#.',
		'..#....#.#',
		'##.#...###',
		'..#.......',
		'.....#....',
		'#......#.#',
		'.........#',
		'..##.#...#',
		'...##.....',
		'Tile 3259:',
		'...###..##',
		'#...#....#',
		'#.....#.#.',
		'.#...#...#',
		'.........#',
		'.........#',
		'...#.....#',
		'#.....##.#',
		'..#...#..#',
		'...##.####',
		'Tile 1579:',
		'.#.##.#..#',
		'.#.#.#....',
		'...#.....#',
		'#..#.....#',
		'....#....#',
		'#.#..#.###',
		'#.#.#.....',
		'##.......#',
		'##.....##.',
		'.###.....#',
		'Tile 1861:',
		'...##.#...',
		'...#.....#',
		'#.#.####..',
		'......#..#',
		'#....#...#',
		'..#.#.##..',
		'.#........',
		'.##.#.#..#',
		'##.....#..',
		'...###.###',
		'Tile 2857:',
		'###.#.##..',
		'.......#.#',
		'#...#.....',
		'##.#.....#',
		'.#....#.#.',
		'#.....#.##',
		'#......#.#',
		'#.....#..#',
		'#.#.#....#',
		'.#..#....#',
		'Tile 3853:',
		'...###...#',
		'#.#.##..##',
		'#.......##',
		'..####..##',
		'.#........',
		'..........',
		'...##.....',
		'....#....#',
		'#........#',
		'.#.##..###',
		'Tile 3917:',
		'#.#.###.##',
		'..........',
		'#..#.#....',
		'#.#....#.#',
		'##..#...##',
		'##.....#..',
		'#.#....#..',
		'.#.....#..',
		'..#.....#.',
		'######.###',
		'Tile 1999:',
		'.######...',
		'.##.#....#',
		'..#.......',
		'.......#.#',
		'.........#',
		'........#.',
		'#..#.#####',
		'##....##..',
		'#.#.....#.',
		'.##.##....',
		'Tile 3719:',
		'..#..##...',
		'##.###....',
		'####..#.#.',
		'#.....#...',
		'#..##.#..#',
		'....#.###.',
		'.##..#...#',
		'......#..#',
		'.#.#....#.',
		'#....###.#',
		'Tile 3491:',
		'....#.##..',
		'#..#.#...#',
		'.#..###..#',
		'#...#.....',
		'#..#...###',
		'..#.#.....',
		'##.#.....#',
		'..##.###.#',
		'#.##.....#',
		'..#.#.####',
		'Tile 3499:',
		'#.##.#...#',
		'#...#.####',
		'.....#....',
		'#.....#.##',
		'.#........',
		'.#.#...#..',
		'.##.#.##..',
		'....#....#',
		'##...#..#.',
		'#.#..##...',
		'Tile 2311:',
		'..#.#...##',
		'#.#.......',
		'.........#',
		'#.....#...',
		'#..#...#..',
		'..##......',
		'....#...#.',
		'#..##...##',
		'#.........',
		'.#...###..',
		'Tile 1459:',
		'####.#...#',
		'..#.####.#',
		'.#.......#',
		'..#.#....#',
		'..........',
		'#.....#.#.',
		'#.....#...',
		'###.#....#',
		'..##..#...',
		'....#..##.',
		'Tile 1447:',
		'.##.##....',
		'.##....#..',
		'######.#.#',
		'..........',
		'#.........',
		'#...#.##.#',
		'#...##...#',
		'#.......##',
		'....#.....',
		'.##.#..#..',
		'Tile 2579:',
		'##...##...',
		'#..#.#..##',
		'...##.#..#',
		'#.#......#',
		'.#....#...',
		'.##......#',
		'#..#..#..#',
		'..#...#.##',
		'#..##....#',
		'.##..###.#',
		'Tile 2531:',
		'#...#..###',
		'.#..#.###.',
		'#......##.',
		'.##..#.#..',
		'.....#..##',
		'.....#.#..',
		'#.#....#..',
		'....#...#.',
		'.......#..',
		'.#.##..#.#',
		'Tile 1019:',
		'....####..',
		'#....#.#..',
		'#.#.#....#',
		'.#...#...#',
		'..#.#....#',
		'#....##...',
		'..#.###..#',
		'#..#..#..#',
		'..#.#.....',
		'..##.#..#.',
		'Tile 1151:',
		'#..#.#.#..',
		'#.....#...',
		'.#..#.#.##',
		'..###....#',
		'..##..#.#.',
		'.#..##....',
		'#...#..##.',
		'..#.###.#.',
		'.#...#....',
		'..###....#',
		'Tile 3767:',
		'.#...###.#',
		'...#.##...',
		'#....###..',
		'...#..#..#',
		'#...##....',
		'##...#....',
		'.##...###.',
		'#...####..',
		'##...###..',
		'..##.#....',
		'Tile 1871:',
		'......#..#',
		'#.#..#....',
		'.........#',
		'......##.#',
		'#....#....',
		'##..#.##.#',
		'#.....#.##',
		'#..#.....#',
		'.#.#..#...',
		'##.##...#.',
		'Tile 2953:',
		'#..##..#.#',
		'#...#.....',
		'.##.......',
		'.#..#.....',
		'##........',
		'#.#..#.#.#',
		'...##....#',
		'...#....##',
		'..#.#.....',
		'.##...#.##',
		'Tile 1153:',
		'.#..######',
		'.#.#.....#',
		'#.....#...',
		'##...#.##.',
		'#...#....#',
		'.#..#.#.#.',
		'##...##...',
		'.#.#.....#',
		'..##..#..#',
		'.......##.',
		'Tile 3359:',
		'#.#####.##',
		'#...#....#',
		'#..#...#..',
		'.#.##....#',
		'###.....##',
		'.#..#.#..#',
		'#........#',
		'.##...#...',
		'#.........',
		'...#...#..',
		'Tile 3257:',
		'...#.####.',
		'##.##....#',
		'.......#.#',
		'#........#',
		'#...#....#',
		'#...#....#',
		'.#...#..#.',
		'#...#....#',
		'###.....##',
		'.....#####',
		'Tile 2557:',
		'##..######',
		'.........#',
		'..##...#.#',
		'#....#..##',
		'...#.#..#.',
		'.#.....##.',
		'...##...##',
		'..#.#...##',
		'....#.#...',
		'#.##...###',
		'Tile 2851:',
		'.#....####',
		'#......#.#',
		'#...#..#.#',
		'#......#..',
		'.#...#....',
		'#.......#.',
		'........#.',
		'#......#.#',
		'...#.....#',
		'......##..',
		'Tile 1103:',
		'#...#.....',
		'#..#..#...',
		'...##.#..#',
		'....###.##',
		'....#..##.',
		'.#..###...',
		'##.....###',
		'...#...#.#',
		'......##.#',
		'.#.#.#.##.',
		'Tile 1801:',
		'##.#...##.',
		'....##..#.',
		'#.......#.',
		'.##...##..',
		'......##..',
		'.#...##..#',
		'.#..#..#..',
		'...#.#..##',
		'##.....#..',
		'#.#.#.#...',
		'Tile 2731:',
		'#.#.#.#..#',
		'#.#....###',
		'#####..#..',
		'#...#.....',
		'#.#...####',
		'#.........',
		'.#.....#..',
		'..#.......',
		'#......#.#',
		'..#.#.##..',
		'Tile 2111:',
		'..##...#..',
		'#...#..###',
		'......##.#',
		'..#.......',
		'#........#',
		'#.......#.',
		'#...##...#',
		'#....#...#',
		'..#...#...',
		'.#....###.',
		'Tile 1613:',
		'..###..#..',
		'#...##...#',
		'#.........',
		'#...#.#..#',
		'#.###...#.',
		'#.##..#...',
		'#......##.',
		'##.#......',
		'..#...#..#',
		'.##...###.',
		'Tile 3739:',
		'#.#.#.#..#',
		'###.#....#',
		'..#..##.#.',
		'.#..#...#.',
		'#.####....',
		'.#......#.',
		'#....#...#',
		'.........#',
		'##..#....#',
		'#...#.#.##',
		'Tile 1297:',
		'.##..#.##.',
		'#.#...#.##',
		'#...##..##',
		'.#..##.###',
		'#...#.....',
		'.##.#....#',
		'........#.',
		'.####..#..',
		'..#.....#.',
		'###..##..#',
		'Tile 2029:',
		'#.....#.##',
		'#.#..#...#',
		'#.####..#.',
		'....#.#.#.',
		'#...#.#...',
		'#......###',
		'......##..',
		'.........#',
		'......##.#',
		'#.###.#..#',
		'Tile 1093:',
		'#.#..#..##',
		'##......#.',
		'#.........',
		'#.........',
		'....#....#',
		'#....###.#',
		'#.#.....##',
		'..#.......',
		'.#.#....#.',
		'#.###.#.##',
		'Tile 2357:',
		'#..#.##..#',
		'..#.......',
		'...#..#..#',
		'.#.....##.',
		'##.#...#.#',
		'#.#.....#.',
		'##.......#',
		'#.#..##...',
		'#....#..##',
		'#.###..###',
		'Tile 1231:',
		'.######...',
		'#..##.....',
		'#........#',
		'#........#',
		'..........',
		'....#...#.',
		'#.##.#..##',
		'##..#.##..',
		'......#.##',
		'.#...##...',
		'Tile 2671:',
		'####..###.',
		'..#.......',
		'...#..#...',
		'#.#.......',
		'.#.#..#...',
		'##.##....#',
		'#....##.#.',
		'#...#....#',
		'#...#.....',
		'..#..##.#.',
		'Tile 3137:',
		'.#..##...#',
		'...#.#..##',
		'#...#....#',
		'#....#...#',
		'.##..##.#.',
		'#.#....#..',
		'#.#.....##',
		'#..##...##',
		'#.....##..',
		'#.#.###.#.',
		'Tile 1229:',
		'...#######',
		'#.#...#..#',
		'..#.....#.',
		'#.##.##.#.',
		'.##.#..##.',
		'....####..',
		'..##..#...',
		'#...#.....',
		'#..###.#..',
		'#.###..##.',
		'Tile 1979:',
		'#..#....##',
		'#....#...#',
		'.#.#....##',
		'.......#.#',
		'..#..##..#',
		'#.#...##.#',
		'...#..#..#',
		'#....#..##',
		'##......#.',
		'.######..#',
		'Tile 2341:',
		'.#.##.....',
		'###......#',
		'........#.',
		'##...#..#.',
		'#...#...#.',
		'#...##.#..',
		'...#..#..#',
		'..##.....#',
		'#...##.#.#',
		'...#..#.##',
		'Tile 1373:',
		'.#####..##',
		'#.#.....#.',
		'........##',
		'.........#',
		'....###.##',
		'#.##.##..#',
		'###.#.##..',
		'..#.....#.',
		'.........#',
		'#.#.###.##',
		'Tile 1483:',
		'#.#..#..##',
		'.##.###...',
		'#.........',
		'#..#......',
		'#...##....',
		'.##.....#.',
		'.#...#.#..',
		'..#......#',
		'..#.#.#...',
		'.##.######',
		'Tile 3109:',
		'.##.###.#.',
		'....###.#.',
		'#...#.....',
		'#.......##',
		'.#.#..####',
		'..#..#####',
		'##...#.#..',
		'..##.....#',
		'#..#..####',
		'##..#.#...',
		'Tile 3449:',
		'##.###..#.',
		'....#.#...',
		'#...#.....',
		'....##..#.',
		'.##.#.#.##',
		'.##..###.#',
		'....##...#',
		'...###....',
		'#....#...#',
		'.#...#.#..',
		'Tile 2969:',
		'##..#.##..',
		'.#..###..#',
		'...###.#.#',
		'..#....#..',
		'#####.....',
		'.#.##....#',
		'.......#.#',
		'.........#',
		'.#......#.',
		'......#.#.',
		'Tile 3877:',
		'##..#...##',
		'....#....#',
		'#..##.....',
		'.....#....',
		'#......#..',
		'.#...#...#',
		'......##.#',
		'##.....##.',
		'..#..#...#',
		'##..###.#.',
		'Tile 3539:',
		'..#...##..',
		'........#.',
		'..#.#....#',
		'##.#.##..#',
		'#...#..#..',
		'..#.......',
		'.#...##...',
		'...#.##.#.',
		'#..##..##.',
		'......#.#.',
		'Tile 3547:',
		'####..#..#',
		'........##',
		'##.#...#.#',
		'...##...##',
		'.#..###..#',
		'##.###..#.',
		'.#..##..##',
		'#....##...',
		'......#...',
		'.##.###..#',
		'Tile 3863:',
		'..#.##.###',
		'....#.#..#',
		'..#...#..#',
		'##.#.#..##',
		'.##.......',
		'#.#...##..',
		'#.#...##.#',
		'.#.#....##',
		'#.#...#.##',
		'##..##....',
		'Tile 2437:',
		'#.##.#####',
		'.#....#..#',
		'#....#....',
		'.....##..#',
		'#..#.#..#.',
		'......#...',
		'..##.#.#..',
		'..##......',
		'.#..##...#',
		'####.#####',
		'Tile 2267:',
		'#..###..##',
		'.#........',
		'###.#....#',
		'....#.....',
		'#.....#..#',
		'..#.......',
		'......####',
		'.#........',
		'#.#......#',
		'...##.....',
		'Tile 3671:',
		'#.##.#####',
		'..#..##...',
		'..........',
		'##.....#.#',
		'.###......',
		'###.....##',
		'##..#....#',
		'#....#....',
		'##......##',
		'###.#.#..#',
		'Tile 3041:',
		'#...######',
		'.........#',
		'.#....####',
		'#.##......',
		'.##...#...',
		'##..#....#',
		'.#.#...#.#',
		'#..#.###..',
		'##..#....#',
		'##..#.###.',
		'Tile 2467:',
		'#####...#.',
		'#.#.#.....',
		'##........',
		'##...#....',
		'.......##.',
		'##......#.',
		'##.#..####',
		'....##...#',
		'####..#..#',
		'#.#.#..###',
		'Tile 3593:',
		'..##.##..#',
		'..........',
		'.#.###..#.',
		'......##..',
		'..........',
		'........#.',
		'##...#.#.#',
		'...##.#..#',
		'...##....#',
		'..##..#.##',
		'Tile 3061:',
		'####.##.#.',
		'..##....#.',
		'###..#...#',
		'..........',
		'.####...#.',
		'..##..#...',
		'...#......',
		'##..#..##.',
		'#.#...#..#',
		'###.###..#',
		'Tile 1409:',
		'#.#.#...#.',
		'#....#..##',
		'......#...',
		'..........',
		'.#..##...#',
		'###......#',
		'#..#.#...#',
		'###....#..',
		'#.......##',
		'#..##.#.#.',
		'Tile 2207:',
		'..#.##.###',
		'#........#',
		'.........#',
		'..#.#...#.',
		'#.##......',
		'....##....',
		'..#.#..##.',
		'###.....#.',
		'.###...#.#',
		'#...#.##..',
		'Tile 1069:',
		'..#....###',
		'#...#.....',
		'.....#..#.',
		'.###...#.#',
		'..###....#',
		'..........',
		'#.....#..#',
		'#.#..#..#.',
		'#..##....#',
		'...##...##',
		'Tile 1187:',
		'#...##..#.',
		'#......#.#',
		'#.......##',
		'##.....###',
		'.#...#.##.',
		'##.#......',
		'###.#...##',
		'#.##...#..',
		'#....#....',
		'#.......#.',
		'Tile 2549:',
		'.###.....#',
		'##.#.#..##',
		'#...#..##.',
		'##.......#',
		'#.........',
		'.#.#..#.##',
		'..........',
		'##...#...#',
		'#....#...#',
		'#####...##',
		'Tile 2593:',
		'#.#..##...',
		'...##...##',
		'.##..##.##',
		'.#..#....#',
		'....####.#',
		'........#.',
		'.###.....#',
		'....##..##',
		'#..#....##',
		'.##..#.#..',
		'Tile 1277:',
		'.#.#...##.',
		'..##.#.###',
		'....#...##',
		'......#.#.',
		'..##.#.#.#',
		'.....#..##',
		'..#...##.#',
		'....#..#.#',
		'##..###...',
		'#....#####',
		'Tile 2251:',
		'#..###..##',
		'#....##...',
		'###...##.#',
		'.#.####.##',
		'#.##....#.',
		'.#...#....',
		'#.......##',
		'.#.#....#.',
		'#.....#..#',
		'###...##..',
		'Tile 1061:',
		'.#.#....##',
		'#.........',
		'.....#..##',
		'...#..#...',
		'..........',
		'#..##.##.#',
		'#...#...##',
		'##.......#',
		'..#.##....',
		'#.#..#...#',
		'Tile 3037:',
		'#.....#.##',
		'........#.',
		'........#.',
		'##..##..#.',
		'.##.##....',
		'##..#...#.',
		'#....#.###',
		'...#..#.#.',
		'#.#####..#',
		'...###.##.',
		'Tile 3823:',
		'.###..#...',
		'#...#.....',
		'....#.#...',
		'#.#..###..',
		'##.#..#.##',
		'.####....#',
		'.###.....#',
		'.#...#...#',
		'#..#####..',
		'..###...#.',
		'Tile 2087:',
		'.#...#.###',
		'.#.##..###',
		'.....#...#',
		'#...#.....',
		'...#.#....',
		'........##',
		'........##',
		'#..#..#..#',
		'.#....##..',
		'####...###',
		'Tile 1321:',
		'#.###.##.#',
		'#...#.....',
		'.##.#...##',
		'#.....#..#',
		'.#...#....',
		'...##.....',
		'#..##.....',
		'#..#...##.',
		'#........#',
		'###.###.#.',
		'Tile 1951:',
		'###.####.#',
		'#...#.....',
		'#.#.#.###.',
		'..##...#.#',
		'#.#..#..#.',
		'##.#.....#',
		'#......#..',
		'.#........',
		'.#.......#',
		'..##...#.#',
		'Tile 3847:',
		'.###.#..##',
		'#..##..#..',
		'..#....#..',
		'#...#...##',
		'#.........',
		'.#...#....',
		'.##.#...##',
		'..#.#..###',
		'...#..##.#',
		'##.#.##..#',
		'Tile 3851:',
		'...##.##..',
		'....#..#.#',
		'.###..#..#',
		'..........',
		'..........',
		'#........#',
		'##..#....#',
		'#......#.#',
		'.....#.#..',
		'.###.#.#..',
		'Tile 3407:',
		'#####.#.##',
		'.......#..',
		'#.....#...',
		'#...##....',
		'........#.',
		'...##.#.#.',
		'.##....##.',
		'#.....#...',
		'....#.....',
		'#..#..#...',
		'Tile 1709:',
		'....#.#..#',
		'....##.###',
		'#.....#..#',
		'#......#.#',
		'.......###',
		'..........',
		'#.#.#....#',
		'..#...##.#',
		'#..#...#.#',
		'.##.#.##..',
		'Tile 1097:',
		'#.###.##.#',
		'.........#',
		'....##.#..',
		'...#.#..##',
		'..#.#....#',
		'..#..##..#',
		'#####....#',
		'#.#..###..',
		'....#.....',
		'######.##.',
		'Tile 3301:',
		'.#..#..#..',
		'.#........',
		'#..#.#....',
		'......#..#',
		'#....#..##',
		'#........#',
		'#.....#.##',
		'#....#...#',
		'...#.#..#.',
		'..####.###',
		'Tile 3517:',
		'#####.##..',
		'#...##..##',
		'.#..#.....',
		'#...#....#',
		'..#.#...##',
		'####..##..',
		'#.#..#..#.',
		'.....#....',
		'.....#.#.#',
		'..#..####.',
		'Tile 2137:',
		'#...##.##.',
		'..#...#.##',
		'#..#.....#',
		'##...###.#',
		'.#.#...#.#',
		'..##..#..#',
		'..#......#',
		'#.#####.##',
		'#..#......',
		'####......',
		'Tile 3623:',
		'#.##.##.#.',
		'.#..#....#',
		'#..##.##..',
		'...##....#',
		'###..#....',
		'..##.#....',
		'.....#.###',
		'......#...',
		'#.........',
		'#...#..##.',
		'Tile 1867:',
		'#..#.##.##',
		'..#..##...',
		'#.##......',
		'##...##..#',
		'..#...##..',
		'#.#.#....#',
		'.........#',
		'.##.##....',
		'...##.....',
		'##...###.#',
		'Tile 1787:',
		'.#..#.##..',
		'...#......',
		'....#..#..',
		'##.#.#.#..',
		'...##....#',
		'...#......',
		'###......#',
		'..........',
		'.......##.',
		'####..#...',
		'Tile 2591:',
		'....###.##',
		'#..#....#.',
		'......#..#',
		'#........#',
		'.....#....',
		'###.#....#',
		'.....###..',
		'###.......',
		'......#..#',
		'..#.#.#...',
		'Tile 1607:',
		'.#.#..####',
		'#.....##..',
		'#..#.....#',
		'..###...##',
		'.......###',
		'#..##.....',
		'...#......',
		'#...#...#.',
		'#.....#.#.',
		'...#...#..',
		'Tile 3271:',
		'.#.###.###',
		'#........#',
		'.#........',
		'####....#.',
		'.......#..',
		'#.....#..#',
		'##.##.##..',
		'.#........',
		'#......#..',
		'.#..####.#',
		'Tile 2063:',
		'#...##.#.#',
		'##...##.#.',
		'.##.##.#..',
		'#..#...#.#',
		'..#.#....#',
		'.##...##..',
		'.#.#.#....',
		'#...#....#',
		'.#........',
		'..#.#.#.##',
		'Tile 1289:',
		'.#..##....',
		'..#..##...',
		'.#....#...',
		'.......#.#',
		'##..#...#.',
		'...##...##',
		'...##.....',
		'.##.#....#',
		'##.....#..',
		'..#.###.#.',
		'Tile 1213:',
		'..#..##.#.',
		'#.#..#.#..',
		'#.........',
		'#..#...#..',
		'#...#...##',
		'..#.......',
		'...##.#...',
		'.##.#.....',
		'##.##....#',
		'####.#.###'
	];

	//Test:
	private const INPUT1 = 
	[
		'Tile 2311:',
		'..##.#..#.',
		'##..#.....',
		'#...##..#.',
		'####.#...#',
		'##.##.###.',
		'##...#.###',
		'.#.#.#..##',
		'..#....#..',
		'###...#.#.',
		'..###..###',
		'Tile 1951:',
		'#.##...##.',
		'#.####...#',
		'.....#..##',
		'#...######',
		'.##.#....#',
		'.###.#####',
		'###.##.##.',
		'.###....#.',
		'..#.#..#.#',
		'#...##.#..',
		'Tile 1171:',
		'####...##.',
		'#..##.#..#',
		'##.#..#.#.',
		'.###.####.',
		'..###.####',
		'.##....##.',
		'.#...####.',
		'#.##.####.',
		'####..#...',
		'.....##...',
		'Tile 1427:',
		'###.##.#..',
		'.#..#.##..',
		'.#.##.#..#',
		'#.#.#.##.#',
		'....#...##',
		'...##..##.',
		'...#.#####',
		'.#.####.#.',
		'..#..###.#',
		'..##.#..#.',
		'Tile 1489:',
		'##.#.#....',
		'..##...#..',
		'.##..##...',
		'..#...#...',
		'#####...#.',
		'#..#.#.#.#',
		'...#.#.#..',
		'##.#...##.',
		'..##.##.##',
		'###.##.#..',
		'Tile 2473:',
		'#....####.',
		'#..#.##...',
		'#.##..#...',
		'######.#.#',
		'.#...#.#.#',
		'.#########',
		'.###.#..#.',
		'########.#',
		'##...##.#.',
		'..###.#.#.',
		'Tile 2971:',
		'..#.#....#',
		'#...###...',
		'#.#.###...',
		'##.##..#..',
		'.#####..##',
		'.#..####.#',
		'#..#.#..#.',
		'..####.###',
		'..#.#.###.',
		'...#.#.#.#',
		'Tile 2729:',
		'...#.#.#.#',
		'####.#....',
		'..#.#.....',
		'....#..#.#',
		'.##..##.#.',
		'.#.####...',
		'####.#.#..',
		'##.####...',
		'##..#.##..',
		'#.##...##.',
		'Tile 3079:',
		'#.#.#####.',
		'.#..######',
		'..#.......',
		'######....',
		'####.#..#.',
		'.#...#.##.',
		'#.#####.##',
		'..#.###...',
		'..#.......',
		'..#.###...'
	];

	
	public function run()
	{
		set_time_limit(0);
				
		//Create the tile helper and caluclate the whole image
		Helper::start();
		$tileHelper = new TileHelper($this::INPUT);
		$image = $tileHelper->buildImage();
		$d = Helper::end();
		//Extract corner tiles
		$cornerTiles = $tileHelper->getCornerTilesFromImage($image);
		
		$result = $cornerTiles[0]->id * $cornerTiles[1]->id * $cornerTiles[2]->id * $cornerTiles[3]->id;
		echo "The result is <b>$result</b><br>";
		echo '<small>The corner tiles are: <ul>';
			echo '<li>Top left: '.$cornerTiles[0]->id.'</li>';
			echo '<li>Top right: '.$cornerTiles[1]->id.'</li>';
			echo '<li>Bottom right: '.$cornerTiles[2]->id.'</li>';
			echo '<li>Bottom left: '.$cornerTiles[3]->id.'</li>';
		echo "</ul> Druation image generation: $d sec.</small>";
	}

}

class TileHelper
{
	/** @var Tile[] $tiles*/
	public $tiles = [];

	public function __construct(array $input)
	{
		$this->tiles = $this->parseTiles($input);
	}

	/** @return Tile[] */
	private function parseTiles(array $input)
	{
		$id = 0;
		/** @var Tile[] $tiles */
		$tiles = [];
		foreach($input as $line)
		{
			$tilepos = strpos($line, 'Tile');
			if($tilepos !== false)
			{
				$id = intval(substr($line, 5, strlen($line)-2));
				$tiles[$id] = new Tile($id);
			}
			else
			{
				$tiles[$id]->addDataLine($line);
			}
		}

		return $tiles;
	}

	/**
	 * @param Tile[][] $image
	 * 
	 * @return Tile[]
	 */
	public function getCornerTilesFromImage(array $image)
	{
		$l = count($image)-1;
		return
		[
			$image[0][0],
			$image[0][$l],
			$image[$l][0],
			$image[$l][$l]
		];
	}

	/** @return Tile[][] */
	public function buildImage()
	{
		$topLeftTile = $this->findTopLeftTile();

		/** @var Tile[][] $img*/
		$l = sqrt(count($this->tiles));
		
		$tiles = $this->tiles;
		$img = [[]];
		$img[0][0] = $topLeftTile;
		unset($tiles[$topLeftTile->id]);

		//Build image
		for($r = 0; $r < $l; $r++)
		{
			for($c = 0; $c < $l; $c++)
			{
				if(!isset($img[$r][$c]))
				{
					/** @var Tile $lastTile */
					$lastTile = $c === 0 ? $img[$r-1][0] : $img[$r][$c-1];
					$compareBorder = $c === 0 ? 3 : 2;
					
					$found = false;
					foreach($tiles as $id => $tile)
					{
						if($lastTile->connectsTo($tile, $compareBorder) === $compareBorder)
						{
							$img[$r][$c] = $tile;
							unset($tiles[$id]);
							$found = true;
							break;
						}
					}
					if(!$found)
					{
						throw new Exception("Unable to process image as row $r, col $c");
					}
				}
			}			
		}

		return $img;
	}

	/**
	 * @return Tile
	 */
	private function findTopLeftTile()
	{
		//Find top left: rotate and flip until it fits:
		$this->topLeftTile = null;
		for($iteration = 0; $iteration < 8; $iteration++)
		{
			foreach($this->tiles as $id => $tile)
			{
				$tile->rotateRight();
				if($iteration === 4){$tile->flip();}

				if($this->checkIfTopLeft($tile))
				{
					return $tile;
				}
			}
		}

		throw new Exception('Top-left tile not found.');
	}

	private function checkIfTopLeft(Tile $tile)
	{
		$cids = [];
		$connections = 0;
		foreach($this->tiles as $id2 => $tile2)
		{
			if($tile->id !== $id2)
			{
				$cid = $tile->connectsTo($tile2);
				if($cid > 0)
				{
					$connections++;
					$cids[] = $cid;
					if($connections > 2)
					{
						return false;
					}
				}
			}
		}

		if($connections === 2 && ($cids === [2,3] || $cids === [3,2]))
		{
			return true;
		}

		return false;
	}

}

class Tile
{
	public $data = [];
	public $id = 0;

	public function __construct(int $id)
	{
		$this->id = $id;
		return $this;
	}

	public function addDataLine(string $dataLine)
	{
		$this->data[] = strval($dataLine);
	}

	public function flip()
	{
		//$this->data = array_reverse($this->data);
		//this is faster:
		$this->data = [$this->data[9],	$this->data[8],	$this->data[7],	$this->data[6],	$this->data[5],	$this->data[4],	$this->data[3],	$this->data[2],	$this->data[1],	$this->data[0]];
	}

	public function rotateRight()
	{
		$d = $this->data;
		for($l = 0; $l <= 9; $l++)
		{
			for($i = 0; $i <= 9; $i++)
			{
				$d[$l][$i] = $this->data[9-$i][$l];
			}
		}
		$this->data = $d;
	}

	public function connectsTo(Tile $tile, int $which = 0)
	{
		if($tile->id === $this->id)
		{
			return 0;
		}

		$w = $which > 0 ? $which : 1;
		$wmax = $which > 0 ? $which : 4;

		for($w = 1; $w <= $wmax; $w++)
		{
			if($w===1){$w1=3;}
			if($w===2){$w1=4;}
			if($w===3){$w1=1;}
			if($w===4){$w1=2;}
			
			for($x = 0; $x < 4; $x++)
			{
				if($this->getBorder($w) === $tile->getBorder($w1))
				{
					//$this->print();
					//$tile->print(true);
					return $w;
				}
				$tile->rotateRight();
			}
			$tile->flip();

			for($x = 0; $x < 4; $x++)
			{
				if($this->getBorder($w) === $tile->getBorder($w1))
				{
					//$this->print();
					//$tile->print(true);
					return $w;
				}
				$tile->rotateRight();
			}
			$tile->flip();
		}

		return 0;
	}

	/** @return string */
	public function getBorder(int $side)
	{
		if($side === 1) //lt-rt
		{ 
			return $this->data[0]; 
		} 
		elseif($side === 2)//rt-rb
		{ 
			return
			(
				$this->data[0][9].
				$this->data[1][9].
				$this->data[2][9].
				$this->data[3][9].
				$this->data[4][9].
				$this->data[5][9].
				$this->data[6][9].
				$this->data[7][9].
				$this->data[8][9].
				$this->data[9][9]
			); 
		} 
		elseif($side === 3) //lb-rb
		{ 
			return $this->data[9]; 
		} 
		elseif($side === 4) //lt-lb
		{ 
			return
			(
				$this->data[0][0].
				$this->data[1][0].
				$this->data[2][0].
				$this->data[3][0].
				$this->data[4][0].
				$this->data[5][0].
				$this->data[6][0].
				$this->data[7][0].
				$this->data[8][0].
				$this->data[9][0]
			); 
		} 

		throw new Exception("Invalid border $side");

	}

	public function print(bool $die = false)
	{
		echo "<p style=\"font-family: 'Source Code Pro', monospace;\"><b>Tile $this->id:</b><br>";
		foreach($this->data as $line)
		{
			echo "$line<br>";
		}
		echo "</p>";

		if($die)
		{
			die;
		}
	}
}