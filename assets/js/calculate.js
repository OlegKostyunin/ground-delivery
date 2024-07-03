function calculateServiceCost(service, ton, total) {
    switch (service) {
        case 'sand':
            total += 1300 * ton;
            break;
        case 'stone':
            total += 1500 * ton;
            break;
        case 'mixture':
            total += 900 * ton;
            break;
        case 'priming':
            total += 1700 * ton;
            break;
    }
    return total;
}



module.exports = calculateServiceCost;