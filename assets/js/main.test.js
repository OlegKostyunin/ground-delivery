const calculateServiceCost = require('./calculate.js');
const calculateCityCost = require('./calculate2.js');

test('Правильно рассчитывает общую стоимость для выбранного города "nn"', () => {
    const total = calculateCityCost('nn', 0);
    expect(total).toBe(1000);
});

test('Правильно рассчитывает общую стоимость для выбранного города "dzer"', () => {
    const total = calculateCityCost('dzer', 0);
    expect(total).toBe(3000);
});

test('Правильно рассчитывает общую стоимость для услуги "sand"', () => {
    const total = calculateServiceCost('sand', 5, 0);
    expect(total).toBe(1300 * 5);
});

test('Правильно рассчитывает общую стоимость для услуги "stone"', () => {
    const total = calculateServiceCost('stone', 5, 0);
    expect(total).toBe(1500 * 5);
});

test('Правильно рассчитывает общую стоимость для выбранного города "bogorodsk"', () => {
    const total = calculateCityCost('bogorodsk', 0);
    expect(total).toBe(4000);
});

test('Правильно рассчитывает общую стоимость для выбранного города "bor"', () => {
    const total = calculateCityCost('bor', 0);
    expect(total).toBe(2000);
});

test('Правильно рассчитывает общую стоимость для выбранного города "balahna"', () => {
    const total = calculateCityCost('balahna', 0);
    expect(total).toBe(2000);
});

test('Правильно рассчитывает общую стоимость для выбранного города "kstovo"', () => {
    const total = calculateCityCost('kstovo', 0);
    expect(total).toBe(5000);
});

test('Корректно обрабатывает неизвестный город', () => {
    const total = calculateCityCost('unknown', 0);
    expect(total).toBe(0); // Если город неизвестен, общая стоимость должна остаться неизменной
});

// Тесты для calculateServiceCost
test('Правильно рассчитывает общую стоимость для услуги "mixture"', () => {
    const total = calculateServiceCost('mixture', 5, 0);
    expect(total).toBe(900 * 5);
});

test('Правильно рассчитывает общую стоимость для услуги "priming"', () => {
    const total = calculateServiceCost('priming', 5, 0);
    expect(total).toBe(1700 * 5);
});

test('Правильно рассчитывает общую стоимость для нулевого количества тонн', () => {
    const total = calculateServiceCost('sand', 0, 0);
    expect(total).toBe(0); // Если количество тонн равно 0, общая стоимость должна быть равна 0 независимо от услуги
});

test('Корректно обрабатывает неизвестную услугу', () => {
    const total = calculateServiceCost('unknown', 5, 0);
    expect(total).toBe(0); // Если услуга неизвестна, общая стоимость должна остаться неизменной
});

