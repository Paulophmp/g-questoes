import Http from './base/http';

const service = new Http('');
const endpoint = 'assuntos';

export const buscar = params => service.get(endpoint, { params });
