<?php

function isSpam(string $email): bool
{

    $emailParts = explode('@', $email);
    $emailDomain = $emailParts[1];
    $spamDomains = file(__DIR__ . '/../templates/register_spam.php', FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
    return in_array($emailDomain, $spamDomains);
}
