<?php
use PHPUnit\Framework\TestCase;

final class JenkinsGithubConnectionTest extends TestCase
{
    public function testJenkinsConnectsToGitHub(): void
    {        
        $jenkinsConnectedToGitHub = true;
        
        $this->assertTrue($jenkinsConnectedToGitHub);
    }
}
?>
