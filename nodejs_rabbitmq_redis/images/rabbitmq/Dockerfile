FROM rabbitmq:3.9-management

# enable rabbitmq_delayed_message_exchange plugin
RUN apt-get update && apt-get install -y wget
RUN wget \
  https://github.com/rabbitmq/rabbitmq-delayed-message-exchange/releases/download/3.9.0/rabbitmq_delayed_message_exchange-3.9.0.ez \
  -O /plugins/rabbitmq_delayed_message_exchange.ez
RUN rabbitmq-plugins enable rabbitmq_delayed_message_exchange

# use custom config
COPY ./rabbitmq.conf /etc/rabbitmq/rabbitmq.conf
