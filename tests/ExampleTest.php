<?php

it('returns the correct status code for Continue', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Continue->value)->toBe(100);
});
it('returns the correct status code for SwitchingProtocols', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::SwitchingProtocols->value)->toBe(101);
});
it('returns the correct status code for Processing', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Processing->value)->toBe(102);
});
it('returns the correct status code for EarlyHints', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::EarlyHints->value)->toBe(103);
});
it('returns the correct status code for OK', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::OK->value)->toBe(200);
});
it('returns the correct status code for Created', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Created->value)->toBe(201);
});
it('returns the correct status code for Accepted', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Accepted->value)->toBe(202);
});
it('returns the correct status code for NonAuthoritativeInformation', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NonAuthoritativeInformation->value)->toBe(203);
});
it('returns the correct status code for NoContent', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NoContent->value)->toBe(204);
});
it('returns the correct status code for ResetContent', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::ResetContent->value)->toBe(205);
});
it('returns the correct status code for PartialContent', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PartialContent->value)->toBe(206);
});
it('returns the correct status code for MultiStatus', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::MultiStatus->value)->toBe(207);
});
it('returns the correct status code for AlreadyReported', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::AlreadyReported->value)->toBe(208);
});
it('returns the correct status code for IMUsed', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::IMUsed->value)->toBe(226);
});
it('returns the correct status code for MultipleChoices', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::MultipleChoices->value)->toBe(300);
});
it('returns the correct status code for MovedPermanently', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::MovedPermanently->value)->toBe(301);
});
it('returns the correct status code for Found', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Found->value)->toBe(302);
});
it('returns the correct status code for SeeOther', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::SeeOther->value)->toBe(303);
});
it('returns the correct status code for NotModified', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NotModified->value)->toBe(304);
});
it('returns the correct status code for UseProxy', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::UseProxy->value)->toBe(305);
});
it('returns the correct status code for SwitchCase', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::SwitchCase->value)->toBe(306);
});
it('returns the correct status code for TemporaryRedirect', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::TemporaryRedirect->value)->toBe(307);
});
it('returns the correct status code for PermanentRedirect', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PermanentRedirect->value)->toBe(308);
});
it('returns the correct status code for BadRequest', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::BadRequest->value)->toBe(400);
});
it('returns the correct status code for Unauthorized', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Unauthorized->value)->toBe(401);
});
it('returns the correct status code for PaymentRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PaymentRequired->value)->toBe(402);
});
it('returns the correct status code for Forbidden', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Forbidden->value)->toBe(403);
});
it('returns the correct status code for NotFound', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NotFound->value)->toBe(404);
});
it('returns the correct status code for MethodNotAllowed', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::MethodNotAllowed->value)->toBe(405);
});
it('returns the correct status code for NotAcceptable', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NotAcceptable->value)->toBe(406);
});
it('returns the correct status code for ProxyAuthenticationRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::ProxyAuthenticationRequired->value)->toBe(407);
});
it('returns the correct status code for RequestTimeout', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::RequestTimeout->value)->toBe(408);
});
it('returns the correct status code for Conflict', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Conflict->value)->toBe(409);
});
it('returns the correct status code for Gone', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Gone->value)->toBe(410);
});
it('returns the correct status code for LengthRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::LengthRequired->value)->toBe(411);
});
it('returns the correct status code for PreconditionFailed', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PreconditionFailed->value)->toBe(412);
});
it('returns the correct status code for PayloadTooLarge', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PayloadTooLarge->value)->toBe(413);
});
it('returns the correct status code for URITooLong', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::URITooLong->value)->toBe(414);
});
it('returns the correct status code for UnsupportedMediaType', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::UnsupportedMediaType->value)->toBe(415);
});
it('returns the correct status code for RangeNotSatisfiable', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::RangeNotSatisfiable->value)->toBe(416);
});
it('returns the correct status code for ExpectationFailed', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::ExpectationFailed->value)->toBe(417);
});
it('returns the correct status code for ImATeapot', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::ImATeapot->value)->toBe(418);
});
it('returns the correct status code for MisdirectedRequest', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::MisdirectedRequest->value)->toBe(421);
});
it('returns the correct status code for UnprocessableEntity', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::UnprocessableEntity->value)->toBe(422);
});
it('returns the correct status code for Locked', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::Locked->value)->toBe(423);
});
it('returns the correct status code for FailedDependency', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::FailedDependency->value)->toBe(424);
});
it('returns the correct status code for TooEarly', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::TooEarly->value)->toBe(425);
});
it('returns the correct status code for UpgradeRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::UpgradeRequired->value)->toBe(426);
});
it('returns the correct status code for PreconditionRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::PreconditionRequired->value)->toBe(428);
});
it('returns the correct status code for TooManyRequests', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::TooManyRequests->value)->toBe(429);
});
it('returns the correct status code for RequestHeaderFieldsTooLarge', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::RequestHeaderFieldsTooLarge->value)->toBe(431);
});
it('returns the correct status code for UnavailableForLegalReasons', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::UnavailableForLegalReasons->value)->toBe(451);
});
it('returns the correct status code for InternalServerError', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::InternalServerError->value)->toBe(500);
});
it('returns the correct status code for NotImplemented', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NotImplemented->value)->toBe(501);
});
it('returns the correct status code for BadGateway', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::BadGateway->value)->toBe(502);
});
it('returns the correct status code for ServiceUnavailable', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::ServiceUnavailable->value)->toBe(503);
});
it('returns the correct status code for GatewayTimeout', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::GatewayTimeout->value)->toBe(504);
});
it('returns the correct status code for HTTPVersionNotSupported', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::HTTPVersionNotSupported->value)->toBe(505);
});
it('returns the correct status code for VariantAlsoNegotiates', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::VariantAlsoNegotiates->value)->toBe(506);
});
it('returns the correct status code for InsufficientStorage', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::InsufficientStorage->value)->toBe(507);
});
it('returns the correct status code for LoopDetected', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::LoopDetected->value)->toBe(508);
});
it('returns the correct status code for NotExtended', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NotExtended->value)->toBe(510);
});
it('returns the correct status code for NetworkAuthenticationRequired', function () {
    expect(ZeroToProd\HttpStatus\HttpStatus::NetworkAuthenticationRequired->value)->toBe(511);
});
