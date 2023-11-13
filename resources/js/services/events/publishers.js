import PubSub from "pubsub-js";

export class Subscriber {
    topic = null;
    callback = () => null;
    isSubscribing = false;
    token = null;

    constructor(topic, callback = () => null) {
        this.topic = topic;
        this.callback = callback;
    }

    subscribe() {
        if (!this.token) {
            this.token = PubSub.subscribe(this.topic, (message, data) => {
                this.callback(data);
            });
            this.isSubscribing = true;
        }
    }

    unsubscribe() {
        if (this.token) {
            PubSub.unsubscribe(this.token);
            this.token = null;
            this.isSubscribing = false;
        }
    }
}

export class Publisher {
    topic = null;

    constructor(topic) {
        this.topic = topic;
    }

    publish(message) {
        PubSub.publish(this.topic, message);
    }
}
