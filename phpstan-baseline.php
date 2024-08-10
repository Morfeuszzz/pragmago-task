<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Domain\\\\ValueObject\\\\Bound\\:\\:findBounds\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain/ValueObject/Bound.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Domain\\\\ValueObject\\\\Bound\\:\\:findLowerBound\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain/ValueObject/Bound.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Domain\\\\ValueObject\\\\Bound\\:\\:findUpperBound\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain/ValueObject/Bound.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property PragmaGoTech\\\\Interview\\\\Domain\\\\ValueObject\\\\Bound\\:\\:\\$breakpoints type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Domain/ValueObject/Bound.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Infrastructure\\\\Service\\\\Handler\\\\Interfaces\\\\InterpolatorInterface\\:\\:interpolate\\(\\) has parameter \\$lowerBound with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Infrastructure/Service/Handler/Interfaces/InterpolatorInterface.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Infrastructure\\\\Service\\\\Handler\\\\Interfaces\\\\InterpolatorInterface\\:\\:interpolate\\(\\) has parameter \\$upperBound with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Infrastructure/Service/Handler/Interfaces/InterpolatorInterface.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Infrastructure\\\\Service\\\\Handler\\\\LinearInterpolator\\:\\:interpolate\\(\\) has parameter \\$lowerBound with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Infrastructure/Service/Handler/LinearInterpolator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Infrastructure\\\\Service\\\\Handler\\\\LinearInterpolator\\:\\:interpolate\\(\\) has parameter \\$upperBound with no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Infrastructure/Service/Handler/LinearInterpolator.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Method PragmaGoTech\\\\Interview\\\\Infrastructure\\\\Service\\\\Provider\\\\FeeBreakpoint\\:\\:getBreakpoints\\(\\) return type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/src/Infrastructure/Service/Provider/FeeBreakpoint.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property unit\\\\Infrastructure\\\\Service\\\\Provider\\\\FeeBreakpointTest\\:\\:\\$term12Breakpoints type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/unit/Infrastructure/Service/Provider/FeeBreakpointTest.php',
];
$ignoreErrors[] = [
	// identifier: missingType.iterableValue
	'message' => '#^Property unit\\\\Infrastructure\\\\Service\\\\Provider\\\\FeeBreakpointTest\\:\\:\\$term24Breakpoints type has no value type specified in iterable type array\\.$#',
	'count' => 1,
	'path' => __DIR__ . '/tests/unit/Infrastructure/Service/Provider/FeeBreakpointTest.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
