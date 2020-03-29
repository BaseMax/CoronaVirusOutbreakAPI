<?php
// MAX BASE
// https://github.com/BaseMax/CoronaVirusOutbreakAPI
$content=file_get_contents("page.html");
preg_match_all('/<tr([^\>]+|)>(\s*|)<td([^\>]+|)>(\s*|)(<span([^\>]+|)>|)(<a([^\>]+|)>|)(?<name>[^\<]+)(<\/a>|)(<\/span>|)(\s*|)<\/td>(\s*|)<td([^\>]+|)>(?<totalCase>[^\<]+)<\/td>(\s*|)(\<\!--.*?-->|)(\s*|)<td([^\>]+|)>(?<newCase>[^\<]+)<\/td>(\s*|)<td([^\>]+|)>(?<totalDeath>[^\<]+)<\/td>(\s*|)<td([^\>]+|)>(?<newDeath>[^\<]+)<\/td>(\s*|)<td([^\>]+|)>(?<totalRecovered>[^\<]+)<\/td>(\s*|)(<!--.*?-->|)(\s*|)<td([^\>]+|)>(?<seriousUser>[^\<]+)<\/td>(\s*|)/i', $content, $matches);
print_r($matches);
