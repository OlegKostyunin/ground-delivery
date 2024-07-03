function calculateCityCost(city, total) {
    switch (city) {
        case 'nn':
            total += 1000;
            break;
        case 'dzer':
            total += 3000;
            break;
        case 'bogorodsk':
            total += 4000;
            break;
        case 'bor':
        case 'balahna':
            total += 2000;
            break;
        case 'kstovo':
            total += 5000;
            break;
    }
    return total;
}

module.exports = calculateCityCost;

