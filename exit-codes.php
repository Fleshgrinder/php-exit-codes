<?php
/**
 * Common exit codes for CLI software.
 *
 * @link http://tldp.org/LDP/abs/html/exitcodes.html
 * @link https://www.freebsd.org/cgi/man.cgi?query=sysexits
 */

/**
 * Successful termination for {@see exit}.
 */
const EXIT_SUCCESS = 0;

/**
 * Unsuccessful termination for {@see exit}.
 *
 * This is a catch-all error code that should only be used by processes if the
 * reason for the failure is unknown.
 */
const EXIT_FAILURE = 1;

/**
 * The command was used incorrectly, e.g., with the wrong number of arguments,
 * a bad flag, a bad syntax in a parameter, or whatever.
 */
const EXIT_USAGE_ERROR = 64;

/**
 * The input data was incorrect in some way.
 *
 * This should only be used for user's data and not system files.
 */
const EXIT_DATA_ERROR = 65;

/**
 * An input file (not a system file) did not exist or was not readable.
 *
 * This could also include errors like "No message" to a mailer (if it cared to
 * catch it).
 */
const EXIT_NO_INPUT = 66;

/**
 * The user specified did not exist.
 *
 * This might be used for mail addresses or remote logins.
 */
const EXIT_NO_USER = 67;

/**
 * The host specified did not exist.
 *
 * This is used in mail addresses or network requests.
 */
const EXIT_NO_HOST = 68;

/**
 * A service is unavailable.
 *
 * This can occur if a support program or file does not exist. This can also be
 * used as a catchall message when something you wanted to do doesn't work, but
 * you don't know why.
 */
const EXIT_SERVICE_UNAVAILABLE = 69;

/**
 * An internal software error has been detected.
 *
 * This should be limited to non-operating system related errors as possible.
 */
const EXIT_SOFTWARE_ERROR = 70;

/**
 * An operating system error has been detected.
 *
 * This is intended to be used for such things as "cannot fork", "cannot create
 * pipe", or the like. It includes things like getuid returning a user that
 * does not exist in the passwd file.
 */
const EXIT_OS_ERROR = 71;

/**
 * Some system file (e.g., `/etc/passwd`, `/var/run/utmp`, etc.) does not
 * exist, cannot be opened, or has some sort of error (e.g., syntax error).
 */
const EXIT_OS_FILE_ERROR = 72;

/**
 * A (user specified) output file cannot be created.
 */
const EXIT_CANNOT_CREATE = 73;

/**
 * An error occurred while doing I/O on some file.
 */
const EXIT_IO_ERROR = 74;

/**
 * Temporary failure, indicating something that is not really an error.
 *
 * In sendmail, this means that a mailer (e.g.) could not create a connection,
 * and the request should be reattempted later.
 */
const EXIT_TEMP_FAILURE = 75;

/**
 * The remote system returned something that was "not possible" during a
 * protocol exchange.
 */
const EXIT_PROTOCOL_ERROR = 76;

/**
 * You did not have sufficient permission to perform the operation.
 *
 * This is not intended for file system problems, which should use
 * {@see EXIT_NO_INPUT} or {@see EXIT_CANNOT_CREATE}, but rather for higher
 * level permissions.
 */
const EXIT_NO_PERMISSION = 77;

/**
 * Something was found in an unconfigured or misconfigured state.
 */
const EXIT_CONFIG_ERROR = 78;
