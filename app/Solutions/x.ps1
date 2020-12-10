cd $PSScriptRoot;
$solutions = Get-ChildItem -Path ./Solution????.php;

foreach($s in $solutions)
{
    $class = $s.Name.Replace(".php", "");

    $content = Get-Content $s -Raw;

    if($content.Contains("SolutionDDPP"))
    {
        $content = $content.Replace("SolutionDDPP", $class);
        $content = $content.Replace("public `$ready = true;", "public `$ready = false;")

        Set-Content $s $content;
        Write-Host "okay";

    }
}



