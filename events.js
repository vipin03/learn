var events = require('events');

// Create an eventEmitter object
var eventEmitter = new events.EventEmitter();

eventEmitter.on('first',()=>{
	console.log('first emmited')
	eventEmitter.emit('second');
});

eventEmitter.on('second',()=>{
	console.log('second emmited');
	eventEmitter.emit('third');
});

eventEmitter.on('third',()=>{
	console.log('third emmited');
});


eventEmitter.emit('first');