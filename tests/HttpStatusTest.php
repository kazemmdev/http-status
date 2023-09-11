<?php

use Kazemmdev\HttpStatus\Http;
use function PHPUnit\Framework\assertEquals;

it('return correct http status define code', function () {
    assertEquals(
        expected: 100,
        actual: Http::CONTINUE()
    );
    assertEquals(
        expected: 101,
        actual: Http::SWITCHING_PROTOCOLS()
    );
    assertEquals(
        expected: 102,
        actual: Http::PROCESSING()
    );
    assertEquals(
        expected: 103,
        actual: Http::EARLY_HINTS()
    );
    assertEquals(
        expected: 200,
        actual: Http::OK()
    );
    assertEquals(
        expected: 201,
        actual: Http::CREATED()
    );
    assertEquals(
        expected: 202,
        actual: Http::ACCEPTED()
    );
    assertEquals(
        expected: 203,
        actual: Http::NON_AUTHORITATIVE_INFORMATION()
    );
    assertEquals(
        expected: 204,
        actual: Http::NO_CONTENT()
    );
    assertEquals(
        expected: 205,
        actual: Http::RESET_CONTENT()
    );
    assertEquals(
        expected: 206,
        actual: Http::PARTIAL_CONTENT()
    );
    assertEquals(
        expected: 207,
        actual: Http::MULTI_STATUS()
    );
    assertEquals(
        expected: 208,
        actual: Http::ALREADY_REPORTED()
    );
    assertEquals(
        expected: 218,
        actual: Http::THIS_IS_FINE()
    );
    assertEquals(
        expected: 226,
        actual: Http::IM_USED()
    );
    assertEquals(
        expected: 300,
        actual: Http::MULTIPLE_CHOICES()
    );
    assertEquals(
        expected: 301,
        actual: Http::MOVED_PERMANENTLY()
    );
    assertEquals(
        expected: 302,
        actual: Http::FOUND()
    );
    assertEquals(
        expected: 303,
        actual: Http::SEE_OTHER()
    );
    assertEquals(
        expected: 304,
        actual: Http::NOT_MODIFIED()
    );
    assertEquals(
        expected: 305,
        actual: Http::USE_PROXY()
    );
    assertEquals(
        expected: 307,
        actual: Http::TEMPORARY_REDIRECT()
    );
    assertEquals(
        expected: 308,
        actual: Http::PERMANENT_REDIRECT()
    );
    assertEquals(
        expected: 400,
        actual: Http::BAD_REQUEST()
    );
    assertEquals(
        expected: 401,
        actual: Http::UNAUTHORIZED()
    );
    assertEquals(
        expected: 402,
        actual: Http::PAYMENT_REQUIRED()
    );
    assertEquals(
        expected: 403,
        actual: Http::FORBIDDEN()
    );
    assertEquals(
        expected: 404,
        actual: Http::NOT_FOUND()
    );
    assertEquals(
        expected: 405,
        actual: Http::METHOD_NOT_ALLOWED()
    );
    assertEquals(
        expected: 406,
        actual: Http::NOT_ACCEPTABLE()
    );
    assertEquals(
        expected: 407,
        actual: Http::PROXY_AUTHENTICATION_REQUIRED()
    );
    assertEquals(
        expected: 408,
        actual: Http::REQUEST_TIMEOUT()
    );
    assertEquals(
        expected: 409,
        actual: Http::CONFLICT()
    );
    assertEquals(
        expected: 410,
        actual: Http::GONE()
    );
    assertEquals(
        expected: 411,
        actual: Http::LENGTH_REQUIRED()
    );
    assertEquals(
        expected: 412,
        actual: Http::PRECONDITION_FAILED()
    );
    assertEquals(
        expected: 413,
        actual: Http::PAYLOAD_TOO_LARGE()
    );
    assertEquals(
        expected: 414,
        actual: Http::URI_TOO_LONG()
    );
    assertEquals(
        expected: 415,
        actual: Http::UNSUPPORTED_MEDIA_TYPE()
    );
    assertEquals(
        expected: 416,
        actual: Http::RANGE_NOT_SATISFIABLE()
    );
    assertEquals(
        expected: 417,
        actual: Http::EXPECTATION_FAILED()
    );
    assertEquals(
        expected: 418,
        actual: Http::I_AM_A_TEAPOT()
    );
    assertEquals(
        expected: 419,
        actual: Http::PAGE_EXPIRED()
    );
    assertEquals(
        expected: 421,
        actual: Http::MISDIRECTED_REQUEST()
    );
    assertEquals(
        expected: 422,
        actual: Http::UNPROCESSABLE_ENTITY()
    );
    assertEquals(
        expected: 423,
        actual: Http::LOCKED()
    );
    assertEquals(
        expected: 424,
        actual: Http::FAILED_DEPENDENCY()
    );
    assertEquals(
        expected: 425,
        actual: Http::TOO_EARLY()
    );
    assertEquals(
        expected: 426,
        actual: Http::UPGRADE_REQUIRED()
    );
    assertEquals(
        expected: 428,
        actual: Http::PRECONDITION_REQUIRED()
    );
    assertEquals(
        expected: 429,
        actual: Http::TOO_MANY_REQUESTS()
    );
    assertEquals(
        expected: 431,
        actual: Http::REQUEST_HEADER_FIELDS_TOO_LARGE()
    );
    assertEquals(
        expected: 440,
        actual: Http::LOGIN_TIME_OUT()
    );
    assertEquals(
        expected: 444,
        actual: Http::NO_RESPONSE()
    );
    assertEquals(
        expected: 449,
        actual: Http::RETRY_WITH()
    );
    assertEquals(
        expected: 450,
        actual: Http::BLOCKED_BY_WINDOWS_PARENTAL_CONTROL()
    );
    assertEquals(
        expected: 451,
        actual: Http::UNAVAILABLE_FOR_LEGAL_REASONS()
    );
    assertEquals(
        expected: 460,
        actual: Http::CLIENT_CLOSED_THE_CONNECTION()
    );
    assertEquals(
        expected: 463,
        actual: Http::X_FORWARDED_FOR_TOO_LARGE()
    );
    assertEquals(
        expected: 494,
        actual: Http::REQUEST_HEADER_TOO_LARGE()
    );
    assertEquals(
        expected: 495,
        actual: Http::SSL_CERTIFICATE_ERROR()
    );
    assertEquals(
        expected: 496,
        actual: Http::SSL_CERTIFICATE_REQUIRED()
    );
    assertEquals(
        expected: 497,
        actual: Http::HTTP_REQUEST_SENT_TO_HTTPS_PORT()
    );
    assertEquals(
        expected: 498,
        actual: Http::INVALID_TOKEN()
    );
    assertEquals(
        expected: 499,
        actual: Http::TOKEN_REQUIRED()
    );
    assertEquals(
        expected: 500,
        actual: Http::INTERNAL_SERVER_ERROR()
    );
    assertEquals(
        expected: 501,
        actual: Http::NOT_IMPLEMENTED()
    );
    assertEquals(
        expected: 502,
        actual: Http::BAD_GATEWAY()
    );
    assertEquals(
        expected: 503,
        actual: Http::SERVICE_UNAVAILABLE()
    );
    assertEquals(
        expected: 504,
        actual: Http::GATEWAY_TIMEOUT()
    );
    assertEquals(
        expected: 505,
        actual: Http::HTTP_VERSION_NOT_SUPPORTED()
    );
    assertEquals(
        expected: 506,
        actual: Http::VARIANT_ALSO_NEGOTIATES()
    );
    assertEquals(
        expected: 507,
        actual: Http::INSUFFICIENT_STORAGE()
    );
    assertEquals(
        expected: 508,
        actual: Http::LOOP_DETECTED()
    );
    assertEquals(
        expected: 509,
        actual: Http::BANDWIDTH_LIMIT_EXCEEDED()
    );
    assertEquals(
        expected: 510,
        actual: Http::NOT_EXTENDED()
    );
    assertEquals(
        expected: 511,
        actual: Http::NETWORK_AUTHENTICATION_REQUIRED()
    );
    assertEquals(
        expected: 520,
        actual: Http::WEB_SERVER_RETURNED_AN_UNKNOWN_ERROR()
    );
    assertEquals(
        expected: 521,
        actual: Http::WEB_SERVER_IS_DOWN()
    );
    assertEquals(
        expected: 522,
        actual: Http::CONNECTION_TIMED_OUT()
    );
    assertEquals(
        expected: 523,
        actual: Http::ORIGIN_IS_UNREACHABLE()
    );
    assertEquals(
        expected: 524,
        actual: Http::A_TIMEOUT_OCCURRED()
    );
    assertEquals(
        expected: 525,
        actual: Http::SSL_HANDSHAKE_FAILED()
    );
    assertEquals(
        expected: 526,
        actual: Http::INVALID_SSL_CERTIFICATE()
    );
    assertEquals(
        expected: 527,
        actual: Http::RAILGUN_ERROR()
    );
    assertEquals(
        expected: 529,
        actual: Http::SITE_IS_OVERLOADED()
    );
    assertEquals(
        expected: 530,
        actual: Http::SITE_IS_FROZEN()
    );
    assertEquals(
        expected: 598,
        actual: Http::NETWORK_READ_TIMEOUT_ERROR()
    );
});

it('throw an error for invalid status code',  function () {
    Http::TEST();
})->throws(\Kazemmdev\HttpStatus\Exceptions\UndefinedException::class);

