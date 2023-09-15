<?php

declare(strict_types=1);

namespace Kazemmdev\HttpStatus;

use Kazemmdev\HttpStatus\Exceptions\UndefinedException;

/**
 * @method static CONTINUE(): int  // return 100
 * @method static SWITCHING_PROTOCOLS(): int // return 101
 * @method static PROCESSING(): int // return 102
 * @method static EARLY_HINTS(): int // return 103
 * @method static OK(): int // return 200
 * @method static CREATED(): int // return 201
 * @method static ACCEPTED(): int // return 202
 * @method static NON_AUTHORITATIVE_INFORMATION(): int // return 203
 * @method static NO_CONTENT(): int // return 204
 * @method static RESET_CONTENT(): int // return 205
 * @method static PARTIAL_CONTENT(): int // return 206
 * @method static MULTI_STATUS(): int // return 207
 * @method static ALREADY_REPORTED(): int // return 208
 * @method static THIS_IS_FINE(): int // return 218
 * @method static IM_USED(): int // return 226
 * @method static MULTIPLE_CHOICES(): int // return 300
 * @method static MOVED_PERMANENTLY(): int // return 301
 * @method static FOUND(): int // return 302
 * @method static SEE_OTHER(): int // return 303
 * @method static NOT_MODIFIED(): int // return 304
 * @method static USE_PROXY(): int // return 305
 * @method static TEMPORARY_REDIRECT(): int // return 307
 * @method static PERMANENT_REDIRECT(): int // return 308
 * @method static BAD_REQUEST(): int // return 400
 * @method static UNAUTHORIZED(): int // return 401
 * @method static PAYMENT_REQUIRED(): int // return 402
 * @method static FORBIDDEN(): int // return 403
 * @method static NOT_FOUND(): int // return 404
 * @method static METHOD_NOT_ALLOWED(): int // return 405
 * @method static NOT_ACCEPTABLE(): int // return 406
 * @method static PROXY_AUTHENTICATION_REQUIRED(): int // return 407
 * @method static REQUEST_TIMEOUT(): int // return 408
 * @method static CONFLICT(): int // return 409
 * @method static GONE(): int // return 410
 * @method static LENGTH_REQUIRED(): int // return 411
 * @method static PRECONDITION_FAILED(): int // return 412
 * @method static PAYLOAD_TOO_LARGE(): int // return 413
 * @method static URI_TOO_LONG(): int // return 414
 * @method static UNSUPPORTED_MEDIA_TYPE(): int // return 415
 * @method static RANGE_NOT_SATISFIABLE(): int // return 416
 * @method static EXPECTATION_FAILED(): int // return 417
 * @method static I_AM_A_TEAPOT(): int // return 418
 * @method static PAGE_EXPIRED(): int // return 419
 * @method static MISDIRECTED_REQUEST(): int // return 421
 * @method static UNPROCESSABLE_ENTITY(): int // return 422
 * @method static LOCKED(): int // return 423
 * @method static FAILED_DEPENDENCY(): int // return 424
 * @method static TOO_EARLY(): int // return 425
 * @method static UPGRADE_REQUIRED(): int // return 426
 * @method static PRECONDITION_REQUIRED(): int // return 428
 * @method static TOO_MANY_REQUESTS(): int // return 429
 * @method static REQUEST_HEADER_FIELDS_TOO_LARGE(): int // return 431
 * @method static LOGIN_TIME_OUT(): int // return 440
 * @method static NO_RESPONSE(): int // return 444
 * @method static RETRY_WITH(): int // return 449
 * @method static BLOCKED_BY_WINDOWS_PARENTAL_CONTROL(): int // return 450
 * @method static UNAVAILABLE_FOR_LEGAL_REASONS(): int // return 451
 * @method static CLIENT_CLOSED_THE_CONNECTION(): int // return 460
 * @method static X_FORWARDED_FOR_TOO_LARGE(): int // return 463
 * @method static REQUEST_HEADER_TOO_LARGE(): int // return 494
 * @method static SSL_CERTIFICATE_ERROR(): int // return 495
 * @method static SSL_CERTIFICATE_REQUIRED(): int // return 496
 * @method static HTTP_REQUEST_SENT_TO_HTTPS_PORT(): int // return 497
 * @method static INVALID_TOKEN(): int // return 498
 * @method static TOKEN_REQUIRED(): int // return 499
 * @method static INTERNAL_SERVER_ERROR(): int // return 500
 * @method static NOT_IMPLEMENTED(): int // return 501
 * @method static BAD_GATEWAY(): int // return 502
 * @method static SERVICE_UNAVAILABLE(): int // return 503
 * @method static GATEWAY_TIMEOUT(): int // return 504
 * @method static HTTP_VERSION_NOT_SUPPORTED(): int // return 505
 * @method static VARIANT_ALSO_NEGOTIATES(): int // return 506
 * @method static INSUFFICIENT_STORAGE(): int // return 507
 * @method static LOOP_DETECTED(): int // return 508
 * @method static BANDWIDTH_LIMIT_EXCEEDED(): int // return 509
 * @method static NOT_EXTENDED(): int // return 510
 * @method static NETWORK_AUTHENTICATION_REQUIRED(): int // return 511
 * @method static WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR(): int // return 520
 * @method static WEB_SERVER_IS_DOWN(): int // return 521
 * @method static CONNECTION_TIMED_OUT(): int // return 522
 * @method static ORIGIN_IS_UNREACHABLE(): int // return 523
 * @method static A_TIMEOUT_OCCURRED(): int // return 524
 * @method static SSL_HANDSHAKE_FAILED(): int // return 525
 * @method static INVALID_SSL_CERTIFICATE(): int // return 526
 * @method static RAILGUN_ERROR(): int // return 527
 * @method static SITE_IS_OVERLOADED(): int // return 529
 * @method static SITE_IS_FROZEN(): int // return 530
 * @method static NETWORK_READ_TIMEOUT_ERROR(): int // return 598
 */
enum Http: int
{
    case CONTINUE = 100;
    case SWITCHING_PROTOCOLS = 101;
    case PROCESSING = 102;
    case EARLY_HINTS = 103;

    case OK = 200;
    case CREATED = 201;
    case ACCEPTED = 202;
    case NON_AUTHORITATIVE_INFORMATION = 203;
    case NO_CONTENT = 204;
    case RESET_CONTENT = 205;
    case PARTIAL_CONTENT = 206;
    case MULTI_STATUS = 207;
    case ALREADY_REPORTED = 208;
    case THIS_IS_FINE = 218;
    case IM_USED = 226;

    case MULTIPLE_CHOICES = 300;
    case MOVED_PERMANENTLY = 301;
    case FOUND = 302;
    case SEE_OTHER = 303;
    case NOT_MODIFIED = 304;
    case USE_PROXY = 305;
    case TEMPORARY_REDIRECT = 307;
    case PERMANENT_REDIRECT = 308;

    case BAD_REQUEST = 400;
    case UNAUTHORIZED = 401;
    case PAYMENT_REQUIRED = 402;
    case FORBIDDEN = 403;
    case NOT_FOUND = 404;
    case METHOD_NOT_ALLOWED = 405;
    case NOT_ACCEPTABLE = 406;
    case PROXY_AUTHENTICATION_REQUIRED = 407;
    case REQUEST_TIMEOUT = 408;
    case CONFLICT = 409;
    case GONE = 410;
    case LENGTH_REQUIRED = 411;
    case PRECONDITION_FAILED = 412;
    case PAYLOAD_TOO_LARGE = 413;
    case URI_TOO_LONG = 414;
    case UNSUPPORTED_MEDIA_TYPE = 415;
    case RANGE_NOT_SATISFIABLE = 416;
    case EXPECTATION_FAILED = 417;
    case I_AM_A_TEAPOT = 418;
    case PAGE_EXPIRED = 419;
    case MISDIRECTED_REQUEST = 421;
    case UNPROCESSABLE_ENTITY = 422;
    case LOCKED = 423;
    case FAILED_DEPENDENCY = 424;
    case TOO_EARLY = 425;
    case UPGRADE_REQUIRED = 426;
    case PRECONDITION_REQUIRED = 428;
    case TOO_MANY_REQUESTS = 429;
    case REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    case LOGIN_TIME_OUT = 440;
    case NO_RESPONSE = 444;
    case RETRY_WITH = 449;
    case BLOCKED_BY_WINDOWS_PARENTAL_CONTROL = 450;
    case UNAVAILABLE_FOR_LEGAL_REASONS = 451;
    case CLIENT_CLOSED_THE_CONNECTION = 460;
    case X_FORWARDED_FOR_TOO_LARGE = 463;
    case REQUEST_HEADER_TOO_LARGE = 494;
    case SSL_CERTIFICATE_ERROR = 495;
    case SSL_CERTIFICATE_REQUIRED = 496;
    case HTTP_REQUEST_SENT_TO_HTTPS_PORT = 497;
    case INVALID_TOKEN = 498;
    case TOKEN_REQUIRED = 499;

    case INTERNAL_SERVER_ERROR = 500;
    case NOT_IMPLEMENTED = 501;
    case BAD_GATEWAY = 502;
    case SERVICE_UNAVAILABLE = 503;
    case GATEWAY_TIMEOUT = 504;
    case HTTP_VERSION_NOT_SUPPORTED = 505;
    case VARIANT_ALSO_NEGOTIATES = 506;
    case INSUFFICIENT_STORAGE = 507;
    case LOOP_DETECTED = 508;
    case BANDWIDTH_LIMIT_EXCEEDED = 509;
    case NOT_EXTENDED = 510;
    case NETWORK_AUTHENTICATION_REQUIRED = 511;
    case WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR = 520;
    case WEB_SERVER_IS_DOWN = 521;
    case CONNECTION_TIMED_OUT = 522;
    case ORIGIN_IS_UNREACHABLE = 523;
    case A_TIMEOUT_OCCURRED = 524;
    case SSL_HANDSHAKE_FAILED = 525;
    case INVALID_SSL_CERTIFICATE = 526;
    case RAILGUN_ERROR = 527;
    case SITE_IS_OVERLOADED = 529;
    case SITE_IS_FROZEN = 530;
    case NETWORK_READ_TIMEOUT_ERROR = 598;

    public function __invoke(): int
    {
        return $this->value;
    }

    public static function __callStatic(string $name, mixed $args): int
    {
        $cases = Http::cases();

        foreach ($cases as $case) {
            if ($case->name === $name) {
                return $case->value;
            }
        }

        throw new UndefinedException(
            enum: Http::class,
            case: $name,
        );
    }

    public static function options(): array
    {
        return array_column(Http::cases(), 'value', 'name');
    }

    public static function names(): array
    {
        return array_column(Http::cases(), 'name');
    }

    public static function values(): array
    {
        return array_column(Http::cases(), 'value');
    }
}